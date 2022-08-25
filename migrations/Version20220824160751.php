<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220824160751 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE caracteristicas (id INT NOT NULL, numero INT NOT NULL, cor VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE categoria (id INT NOT NULL, nome VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE produtos (id INT NOT NULL, caracteristica_id INT DEFAULT NULL, nome VARCHAR(255) NOT NULL, descricao VARCHAR(255) NOT NULL, imagem VARCHAR(255) NOT NULL, preco DOUBLE PRECISION NOT NULL, slug VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_3E52435A7300D78 ON produtos (caracteristica_id)');
        $this->addSql('CREATE TABLE produtos_categoria (produtos_id INT NOT NULL, categoria_id INT NOT NULL, PRIMARY KEY(produtos_id, categoria_id))');
        $this->addSql('CREATE INDEX IDX_A893187B65691519 ON produtos_categoria (produtos_id)');
        $this->addSql('CREATE INDEX IDX_A893187B3397707A ON produtos_categoria (categoria_id)');
        $this->addSql('ALTER TABLE produtos ADD CONSTRAINT FK_3E52435A7300D78 FOREIGN KEY (caracteristica_id) REFERENCES caracteristicas (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE produtos_categoria ADD CONSTRAINT FK_A893187B65691519 FOREIGN KEY (produtos_id) REFERENCES produtos (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE produtos_categoria ADD CONSTRAINT FK_A893187B3397707A FOREIGN KEY (categoria_id) REFERENCES categoria (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE produtos DROP CONSTRAINT FK_3E52435A7300D78');
        $this->addSql('ALTER TABLE produtos_categoria DROP CONSTRAINT FK_A893187B65691519');
        $this->addSql('ALTER TABLE produtos_categoria DROP CONSTRAINT FK_A893187B3397707A');
        $this->addSql('DROP TABLE caracteristicas');
        $this->addSql('DROP TABLE categoria');
        $this->addSql('DROP TABLE produtos');
        $this->addSql('DROP TABLE produtos_categoria');
    }
}
