<?php

namespace AppBundle\Helper;
use Monolog\Logger;
use Doctrine\ORM\EntityManager;
use AppBundle\Entity\DeliveryBoy;
use AppBundle\Entity\UserAccounts;
use AppBundle\Entity\TransactionData;
use AppBundle\Entity\AdminTransactionData;
use AppBundle\Entity\RestaurantTransactionData;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
    
class TransactionHelper {

	/**
     *
     * @var EntityManager 
     */
    protected $em;
    protected $session;
    protected $token;
    protected $container;
    private $logger;

    public function __construct(TokenStorage $token,EntityManager $entityManager,Session $session,$container,Logger $logger)
    {
        $this->em = $entityManager;
        $this->session = $session;
        $this->token = $token;
        $this->container = $container;
        $this->logger = $logger;
    }

    //for adding money to account from order
    public function orderDBTransactionEntry($customerOrder,$transactionType){
        try{

            if($transactionType=="cr"){
                $account=$customerOrder->getDeliveryBoy()->getUserAccounts();
                if($account==null){
                    $account=new UserAccounts();
                    $account->setUserType("del");
                    $account->setDeliveryBoy($customerOrder->getDeliveryBoy());
                    $this->em->persist($account);
                    $this->em->flush();
                }
                $transactionData=new TransactionData();
                $transactionData->setTransactionType("cr");
                $transactionData->setAccountType('due');
                $transactionData->setTransDate();
                $transactionData->setToAccount($account);
                $transactionData->setDescription("Cash received from ".$customerOrder->getId());
                $transactionData->setAmount($customerOrder->getOrderAmount());
                $prevBalance=$this->getDueAccountBalance($account->getId());
                $transactionData->setBalance($prevBalance + $customerOrder->getOrderAmount());
                $this->em->persist($transactionData);

            }
            //transaction database update
            $this->em->flush();
        }catch(\Exception $e){
            $this->logger->error($e->getMessage()); 
        }

        return true;
    }

    //for transaction entry at the time of cutomer order
    public function newOrderDueTransactionEntry($customerOrder,$transactionType){
        try{

            if($transactionType=="cr"){
                $account=$this->em->getRepository('AppBundle:UserAccounts')->findByUserType('adm');
                if(sizeof($account)<=0){
                    $account=new UserAccounts();
                    $account->setUserType("adm");
                    $this->em->persist($account);
                    $this->em->flush();
                }else{
                    $account=$account[0];
                }
                $transactionData=new AdminTransactionData();
                $transactionData->setTransactionType("cr");
                $transactionData->setTransDate();
                $transactionData->setToAccount($account);
                $transactionData->setAccountType('due');
                $transactionData->setDescription("From order ".$customerOrder->getId());
                $transactionData->setAmount($customerOrder->getOrderAmount());
                $prevBalance=$this->getAdminDueAccountBalance($account->getId());
                $transactionData->setBalance($prevBalance + $customerOrder->getOrderAmount());
                $this->em->persist($transactionData);

                $account=$customerOrder->getRestaurant()->getUserAccounts();
                if($account==null){
                    $account=new UserAccounts();
                    $account->setUserType("res");
                    $account->setRestaurants($customerOrder->getRestaurant());
                    $this->em->persist($account);
                    $this->em->flush();
                }
                $transactionData=new RestaurantTransactionData();
                $transactionData->setTransactionType("cr");
                $transactionData->setTransDate();
                $transactionData->setToAccount($account);
                $transactionData->setAccountType('due');
                $transactionData->setDescription("From order ".$customerOrder->getId());
                $transactionData->setAmount($customerOrder->getRestPay());
                $prevBalance=$this->getRestaurantDueAccountBalance($account->getId());
                $transactionData->setBalance($prevBalance + $customerOrder->getRestPay());
                $this->em->persist($transactionData);
            }
            //transaction database update
            $this->em->flush();
        }catch(\Exception $e){
            $this->logger->error($e->getMessage()); 
        }

        return true;
    }

//for transaction entry at the time of cutomer order
    public function cancelOrderDueTransactionEntry($customerOrder,$transactionType="dr"){
        try{
            if($transactionType=="dr"){
                $account=$this->em->getRepository('AppBundle:UserAccounts')->findByUserType('adm');
                if(sizeof($account)<=0){
                    $account=new UserAccounts();
                    $account->setUserType("adm");
                    $this->em->persist($account);
                    $this->em->flush();
                }else{
                    $account=$account[0];
                }
                $transactionData=new AdminTransactionData();
                $transactionData->setTransactionType("dr");
                $transactionData->setTransDate();
                $transactionData->setFromAccount($account);
                $transactionData->setAccountType('due');
                $transactionData->setDescription("Cancelled order ".$customerOrder->getId());
                $transactionData->setAmount($customerOrder->getOrderAmount());
                $prevBalance=$this->getAdminDueAccountBalance($account->getId());
                $transactionData->setBalance($prevBalance - $customerOrder->getOrderAmount());
                $this->em->persist($transactionData);
                $account=$customerOrder->getRestaurant()->getUserAccounts();
                if($account==null){
                    $account=new UserAccounts();
                    $account->setUserType("res");
                    $account->setRestaurants($customerOrder->getRestaurant());
                    $this->em->persist($account);
                    $this->em->flush();
                }
                $transactionData=new RestaurantTransactionData();
                $transactionData->setTransactionType("dr");
                $transactionData->setTransDate();
                $transactionData->setFromAccount($account);
                $transactionData->setAccountType('due');
               $transactionData->setDescription("Cancelled order ".$customerOrder->getId());
                $transactionData->setAmount($customerOrder->getRestPay());
                $prevBalance=$this->getRestaurantDueAccountBalance($account->getId());
                $transactionData->setBalance($prevBalance - $customerOrder->getRestPay());
                $this->em->persist($transactionData);
            }
            //transaction database update
           $this->em->flush();
        }catch(\Exception $e){
            $this->logger->error($e->getMessage()); 
        }

        return true;
    }

    
    public function restaurantPayEntry($raccount,$payAmount){
        try{
            $account=$this->em->getRepository('AppBundle:UserAccounts')->findByUserType('adm');
            if(sizeof($account)<=0){
                $account=new UserAccounts();
                $account->setUserType("adm");
                $this->em->persist($account);
                $this->em->flush();
            }else{
                $account=$account[0];
            }

            //for deducting from admin account
            $transactionData=new AdminTransactionData();
            $transactionData->setTransactionType("dr");
            $transactionData->setTransDate();
            $transactionData->setFromAccount($account);
            $transactionData->setToAccount($raccount);
            $transactionData->setAccountType('norm');
            $transactionData->setDescription("Amount paid for the restaurant ".$raccount->getId());
            $transactionData->setAmount($payAmount);
            $prevBalance=$this->getAdminNormAccountBalance($account->getId());
            $transactionData->setBalance($prevBalance - $payAmount);
            $this->em->persist($transactionData);

            
            //for adding amount to the restaurant normal account
            $transactionData=new RestaurantTransactionData();
            $transactionData->setTransactionType("cr");
            $transactionData->setTransDate();
            $transactionData->setFromAccount($account);
            $transactionData->setToAccount($raccount);
            $transactionData->setAccountType('norm');
            $transactionData->setDescription("Amount received from admin ".$account->getId());
            $transactionData->setAmount($payAmount);
            $prevBalance=$this->getRestaurantNormAccountBalance($raccount->getId());
            $transactionData->setBalance($prevBalance + $payAmount);
            $this->em->persist($transactionData);
            
            //for deducting amount from the restaurant due account
            $transactionData=new RestaurantTransactionData();
            $transactionData->setTransactionType("dr");
            $transactionData->setTransDate();
            $transactionData->setFromAccount($raccount);
            $transactionData->setAccountType('due');
            $transactionData->setDescription("Amount cleared by admin ".$account->getId());
            $transactionData->setAmount($payAmount);
            $prevBalance=$this->getRestaurantDueAccountBalance($raccount->getId());
            $transactionData->setBalance($prevBalance - $payAmount);
            $this->em->persist($transactionData);
            //transaction database update
            $this->em->flush();
        }catch(\Exception $e){
            $this->logger->error($e->getMessage()); 
        }

        return true;
    }

    public function getNormalAccountBalance($accountNo){
        $balance = $this->em->createQueryBuilder()
                            ->select('a.balance')
                            ->from('AppBundle:TransactionData', 'a')
                            ->leftJoin('a.fromAccount','fr')
                            ->leftJoin('a.toAccount','tr')
                            ->where('fr.id = :accountNo or tr.id = :accountNo')
                            ->andWhere('a.accountType = :accountType')
                            ->setParameter('accountNo',$accountNo)
                            ->setParameter('accountType',"norm")
                            ->orderBy('a.transDate','DESC')
                            ->setMaxResults(1)
                            ->getQuery()
                            ->getOneOrNullResult();
        //$this->logger->error('An error occurred\n');
        if($balance==[]){
            $balance=0;
        }else{
            $balance=$balance["balance"];
        }
        return $balance;
    }

    public function getDueAccountBalance($accountNo){
        $balance = $this->em->createQueryBuilder()
                            ->select('a.balance')
                            ->from('AppBundle:TransactionData', 'a')
                            ->leftJoin('a.fromAccount','fr')
                            ->leftJoin('a.toAccount','tr')
                            ->where('fr.id = :accountNo or tr.id = :accountNo')
                            ->andWhere('a.accountType = :accountType')
                            ->setParameter('accountNo',$accountNo)
                            ->setParameter('accountType',"due")
                            ->orderBy('a.transDate','DESC')
                            ->setMaxResults(1)
                            ->getQuery()
                            ->getOneOrNullResult();
        //$this->logger->error('An error occurred\n');
        if($balance==[]){
            $balance=0;
        }else{
            $balance=$balance["balance"];
        }
        return $balance;
    }

    public function getAdminNormAccountBalance($accountNo){
        $balance = $this->em->createQueryBuilder()
                            ->select('a.balance')
                            ->from('AppBundle:AdminTransactionData', 'a')
                            ->leftJoin('a.fromAccount','fr')
                            ->leftJoin('a.toAccount','tr')
                            ->where('fr.id = :accountNo or tr.id = :accountNo')
                            ->andWhere('a.accountType = :accountType')
                            ->setParameter('accountNo',$accountNo)
                            ->setParameter('accountType',"norm")
                            ->orderBy('a.transDate','DESC')
                            ->setMaxResults(1)
                            ->getQuery()
                            ->getOneOrNullResult();
        //$this->logger->error('An error occurred\n');
        if($balance==[]){
            $balance=0;
        }else{
            $balance=$balance["balance"];
        }
        return $balance;
    }

    public function getRestaurantNormAccountBalance($accountNo){
        $balance = $this->em->createQueryBuilder()
                            ->select('a.balance')
                            ->from('AppBundle:RestaurantTransactionData', 'a')
                            ->leftJoin('a.fromAccount','fr')
                            ->leftJoin('a.toAccount','tr')
                            ->where('fr.id = :accountNo or tr.id = :accountNo')
                            ->andWhere('a.accountType = :accountType')
                            ->setParameter('accountNo',$accountNo)
                            ->setParameter('accountType',"norm")
                            ->orderBy('a.transDate','DESC')
                            ->setMaxResults(1)
                            ->getQuery()
                            ->getOneOrNullResult();
        //$this->logger->error('An error occurred\n');
        if($balance==[]){
            $balance=0;
        }else{
            $balance=$balance["balance"];
        }
        return $balance;
    }

    public function getAdminDueAccountBalance($accountNo){
        $balance = $this->em->createQueryBuilder()
                            ->select('a.balance')
                            ->from('AppBundle:AdminTransactionData', 'a')
                            ->leftJoin('a.fromAccount','fr')
                            ->leftJoin('a.toAccount','tr')
                            ->where('fr.id = :accountNo or tr.id = :accountNo')
                            ->andWhere('a.accountType = :accountType')
                            ->setParameter('accountNo',$accountNo)
                            ->setParameter('accountType',"due")
                            ->orderBy('a.transDate','DESC')
                            ->setMaxResults(1)
                            ->getQuery()
                            ->getOneOrNullResult();
        //$this->logger->error('An error occurred\n');
        if($balance==[]){
            $balance=0;
        }else{
            $balance=$balance["balance"];
        }
        return $balance;
    }

    public function getRestaurantDueAccountBalance($accountNo){
        $balance = $this->em->createQueryBuilder()
                            ->select('a.balance')
                            ->from('AppBundle:RestaurantTransactionData', 'a')
                            ->leftJoin('a.fromAccount','fr')
                            ->leftJoin('a.toAccount','tr')
                            ->where('fr.id = :accountNo or tr.id = :accountNo')
                            ->andWhere('a.accountType = :accountType')
                            ->setParameter('accountNo',$accountNo)
                            ->setParameter('accountType',"due")
                            ->orderBy('a.transDate','DESC')
                            ->setMaxResults(1)
                            ->getQuery()
                            ->getOneOrNullResult();
        //$this->logger->error('An error occurred\n');
        if($balance==[]){
            $balance=0;
        }else{
            $balance=$balance["balance"];
        }
        return $balance;
    }


    //for adding money to account from order
    public function deliveryPayEntry($account,$payAmount){
        try{
            $admAccount=$this->em->getRepository('AppBundle:UserAccounts')->findByUserType('adm');
            if(sizeof($admAccount)<=0){
                $admAccount=new UserAccounts();
                $admAccount->setUserType("adm");
                $this->em->persist($admAccount);
                $this->em->flush();
            }else{
                $admAccount=$admAccount[0];
            }

            $transactionData=new AdminTransactionData();
            $transactionData->setTransactionType("dr");
            $transactionData->setTransDate();
            $transactionData->setFromAccount($account);
            $transactionData->setToAccount($admAccount);
            $transactionData->setAccountType('due');
            $transactionData->setDescription("Amount Paid by ".$account->getId());
            $transactionData->setAmount($payAmount);
            $prevBalance=$this->getAdminDueAccountBalance($admAccount->getId());
            $transactionData->setBalance($prevBalance - $payAmount);
            $this->em->persist($transactionData);

            
            $transactionData1=new AdminTransactionData();
            $transactionData1->setTransactionType("cr");
            $transactionData1->setTransDate();
            $transactionData1->setFromAccount($account);
            $transactionData1->setToAccount($admAccount);
            $transactionData1->setAccountType('norm');
            $transactionData1->setDescription("Amount received from ".$account->getId());
            $transactionData1->setAmount($payAmount);
            $prevBalance=$this->getAdminNormAccountBalance($admAccount->getId());
            $transactionData1->setBalance($prevBalance + $payAmount);
            $this->em->persist($transactionData1);


            $transactionData=new TransactionData();
            $transactionData->setTransactionType("dr");
            $transactionData->setAccountType('due');
            $transactionData->setTransDate();
            $transactionData->setToAccount($account);
            $transactionData->setDescription("Cash paid for admin");
            $transactionData->setAmount($payAmount);
            $prevBalance=$this->getDueAccountBalance($account->getId());
            $transactionData->setBalance($prevBalance - $payAmount);
            $this->em->persist($transactionData);

            //transaction database update
            $this->em->flush();
        }catch(\Exception $e){
            $this->logger->error($e->getMessage()); 
        }

        return $transactionData->getBalance();
    }

}

?>