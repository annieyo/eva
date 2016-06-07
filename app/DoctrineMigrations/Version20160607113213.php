<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160607113213 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE answer (id INT AUTO_INCREMENT NOT NULL, question_id INT DEFAULT NULL, text VARCHAR(255) NOT NULL, INDEX IDX_DADD4A251E27F6BF (question_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE kind (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE question (id INT AUTO_INCREMENT NOT NULL, category_id INT DEFAULT NULL, questiontype_id INT DEFAULT NULL, user_id INT DEFAULT NULL, text VARCHAR(255) NOT NULL, public VARCHAR(255) NOT NULL, INDEX IDX_B6F7494E12469DE2 (category_id), INDEX IDX_B6F7494E3B224418 (questiontype_id), INDEX IDX_B6F7494EA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE questionnaire (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE questionnaire_question (questionnaire_id INT NOT NULL, question_id INT NOT NULL, INDEX IDX_28CC40C3CE07E8FF (questionnaire_id), INDEX IDX_28CC40C31E27F6BF (question_id), PRIMARY KEY(questionnaire_id, question_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE questions_category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE questiontype (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE submission (id INT AUTO_INCREMENT NOT NULL, question_id INT DEFAULT NULL, answer_id INT DEFAULT NULL, INDEX IDX_DB055AF31E27F6BF (question_id), INDEX IDX_DB055AF3AA334807 (answer_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE survey (id INT AUTO_INCREMENT NOT NULL, questionnaire_id INT DEFAULT NULL, surveycategory_id INT DEFAULT NULL, user_id INT DEFAULT NULL, INDEX IDX_AD5F9BFCCE07E8FF (questionnaire_id), INDEX IDX_AD5F9BFC347767AD (surveycategory_id), INDEX IDX_AD5F9BFCA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE survey_category (id INT AUTO_INCREMENT NOT NULL, kind_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_5ABB5FE630602CA9 (kind_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE temp_access (id INT AUTO_INCREMENT NOT NULL, submission_id INT DEFAULT NULL, survey_id INT DEFAULT NULL, username VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, participated TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_71F8BB63E1FD4933 (submission_id), INDEX IDX_71F8BB63B3FE509D (survey_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, salt VARCHAR(255) NOT NULL, kuerzel VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE answer ADD CONSTRAINT FK_DADD4A251E27F6BF FOREIGN KEY (question_id) REFERENCES question (id)');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494E12469DE2 FOREIGN KEY (category_id) REFERENCES questions_category (id)');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494E3B224418 FOREIGN KEY (questiontype_id) REFERENCES questiontype (id)');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494EA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE questionnaire_question ADD CONSTRAINT FK_28CC40C3CE07E8FF FOREIGN KEY (questionnaire_id) REFERENCES questionnaire (id)');
        $this->addSql('ALTER TABLE questionnaire_question ADD CONSTRAINT FK_28CC40C31E27F6BF FOREIGN KEY (question_id) REFERENCES question (id)');
        $this->addSql('ALTER TABLE submission ADD CONSTRAINT FK_DB055AF31E27F6BF FOREIGN KEY (question_id) REFERENCES question (id)');
        $this->addSql('ALTER TABLE submission ADD CONSTRAINT FK_DB055AF3AA334807 FOREIGN KEY (answer_id) REFERENCES answer (id)');
        $this->addSql('ALTER TABLE survey ADD CONSTRAINT FK_AD5F9BFCCE07E8FF FOREIGN KEY (questionnaire_id) REFERENCES questionnaire (id)');
        $this->addSql('ALTER TABLE survey ADD CONSTRAINT FK_AD5F9BFC347767AD FOREIGN KEY (surveycategory_id) REFERENCES survey_category (id)');
        $this->addSql('ALTER TABLE survey ADD CONSTRAINT FK_AD5F9BFCA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE survey_category ADD CONSTRAINT FK_5ABB5FE630602CA9 FOREIGN KEY (kind_id) REFERENCES kind (id)');
        $this->addSql('ALTER TABLE temp_access ADD CONSTRAINT FK_71F8BB63E1FD4933 FOREIGN KEY (submission_id) REFERENCES submission (id)');
        $this->addSql('ALTER TABLE temp_access ADD CONSTRAINT FK_71F8BB63B3FE509D FOREIGN KEY (survey_id) REFERENCES survey (id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE submission DROP FOREIGN KEY FK_DB055AF3AA334807');
        $this->addSql('ALTER TABLE survey_category DROP FOREIGN KEY FK_5ABB5FE630602CA9');
        $this->addSql('ALTER TABLE answer DROP FOREIGN KEY FK_DADD4A251E27F6BF');
        $this->addSql('ALTER TABLE questionnaire_question DROP FOREIGN KEY FK_28CC40C31E27F6BF');
        $this->addSql('ALTER TABLE submission DROP FOREIGN KEY FK_DB055AF31E27F6BF');
        $this->addSql('ALTER TABLE questionnaire_question DROP FOREIGN KEY FK_28CC40C3CE07E8FF');
        $this->addSql('ALTER TABLE survey DROP FOREIGN KEY FK_AD5F9BFCCE07E8FF');
        $this->addSql('ALTER TABLE question DROP FOREIGN KEY FK_B6F7494E12469DE2');
        $this->addSql('ALTER TABLE question DROP FOREIGN KEY FK_B6F7494E3B224418');
        $this->addSql('ALTER TABLE temp_access DROP FOREIGN KEY FK_71F8BB63E1FD4933');
        $this->addSql('ALTER TABLE temp_access DROP FOREIGN KEY FK_71F8BB63B3FE509D');
        $this->addSql('ALTER TABLE survey DROP FOREIGN KEY FK_AD5F9BFC347767AD');
        $this->addSql('ALTER TABLE question DROP FOREIGN KEY FK_B6F7494EA76ED395');
        $this->addSql('ALTER TABLE survey DROP FOREIGN KEY FK_AD5F9BFCA76ED395');
        $this->addSql('DROP TABLE answer');
        $this->addSql('DROP TABLE kind');
        $this->addSql('DROP TABLE question');
        $this->addSql('DROP TABLE questionnaire');
        $this->addSql('DROP TABLE questionnaire_question');
        $this->addSql('DROP TABLE questions_category');
        $this->addSql('DROP TABLE questiontype');
        $this->addSql('DROP TABLE submission');
        $this->addSql('DROP TABLE survey');
        $this->addSql('DROP TABLE survey_category');
        $this->addSql('DROP TABLE temp_access');
        $this->addSql('DROP TABLE user');
    }
}
