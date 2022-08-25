<?php

namespace App\Repository;

use App\Entity\Produtos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Query;

/**
 * @extends ServiceEntityRepository<Produtos>
 *
 * @method Produtos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Produtos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Produtos[]    findAll()
 * @method Produtos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProdutosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Produtos::class);
    }

    public function add(Produtos $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Produtos $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function getBySlug(string $slug)
    {
        return $this->createQueryBuilder('produto')
            ->andWhere('produto.slug = :val')
            ->setParameter('val', $slug)
            ->getQuery()
            ->getOneOrNullResult(Query::HYDRATE_ARRAY);
    }

//    /**
//     * @return Produtos[] Returns an array of Produtos objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Produtos
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
