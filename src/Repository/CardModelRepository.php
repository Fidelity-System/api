<?php
	
	namespace App\Repository;
	
	use App\Entity\CardModel;
	use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
	use Doctrine\Common\Persistence\ManagerRegistry;
	
	/**
	 * @method CardModel|null find($id, $lockMode = null, $lockVersion = null)
	 * @method CardModel|null findOneBy(array $criteria, array $orderBy = null)
	 * @method CardModel[]    findAll()
	 * @method CardModel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
	 */
	class CardModelRepository extends ServiceEntityRepository {
		public function __construct(ManagerRegistry $registry) {
			parent::__construct($registry, CardModel::class);
		}
		
		// /**
		//  * @return CardModel[] Returns an array of CardModel objects
		//  */
		/*
		public function findByExampleField($value)
		{
			return $this->createQueryBuilder('c')
				->andWhere('c.exampleField = :val')
				->setParameter('val', $value)
				->orderBy('c.id', 'ASC')
				->setMaxResults(10)
				->getQuery()
				->getResult()
			;
		}
		*/
		
		/*
		public function findOneBySomeField($value): ?CardModel
		{
			return $this->createQueryBuilder('c')
				->andWhere('c.exampleField = :val')
				->setParameter('val', $value)
				->getQuery()
				->getOneOrNullResult()
			;
		}
		*/
	}
