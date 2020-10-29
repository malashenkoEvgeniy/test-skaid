<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%magazine}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%author}}`
 * - `{{%author}}`
 * - `{{%author}}`
 * - `{{%author}}`
 * - `{{%author}}`
 */
class m201029_151703_create_magazine_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%magazine}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(128)->notNull(),
            'description' => $this->text(),
            'image' => $this->string(128),
            'author_id1' => $this->integer()->notNull(),
            'author_id2' => $this->integer(),
            'author_id3' => $this->integer(),
            'author_id4' => $this->integer(),
            'author_id5' => $this->integer(),
            'date_of_issue' => $this->integer()->defaultValue(0),
        ]);

        // creates index for column `author_id1`
        $this->createIndex(
            '{{%idx-magazine-author_id1}}',
            '{{%magazine}}',
            'author_id1'
        );

        // add foreign key for table `{{%author}}`
        $this->addForeignKey(
            '{{%fk-magazine-author_id1}}',
            '{{%magazine}}',
            'author_id1',
            '{{%author}}',
            'id',
            'CASCADE'
        );

        // creates index for column `author_id2`
        $this->createIndex(
            '{{%idx-magazine-author_id2}}',
            '{{%magazine}}',
            'author_id2'
        );

        // add foreign key for table `{{%author}}`
        $this->addForeignKey(
            '{{%fk-magazine-author_id2}}',
            '{{%magazine}}',
            'author_id2',
            '{{%author}}',
            'id',
            'CASCADE'
        );

        // creates index for column `author_id3`
        $this->createIndex(
            '{{%idx-magazine-author_id3}}',
            '{{%magazine}}',
            'author_id3'
        );

        // add foreign key for table `{{%author}}`
        $this->addForeignKey(
            '{{%fk-magazine-author_id3}}',
            '{{%magazine}}',
            'author_id3',
            '{{%author}}',
            'id',
            'CASCADE'
        );

        // creates index for column `author_id4`
        $this->createIndex(
            '{{%idx-magazine-author_id4}}',
            '{{%magazine}}',
            'author_id4'
        );

        // add foreign key for table `{{%author}}`
        $this->addForeignKey(
            '{{%fk-magazine-author_id4}}',
            '{{%magazine}}',
            'author_id4',
            '{{%author}}',
            'id',
            'CASCADE'
        );

        // creates index for column `author_id5`
        $this->createIndex(
            '{{%idx-magazine-author_id5}}',
            '{{%magazine}}',
            'author_id5'
        );

        // add foreign key for table `{{%author}}`
        $this->addForeignKey(
            '{{%fk-magazine-author_id5}}',
            '{{%magazine}}',
            'author_id5',
            '{{%author}}',
            'id',
            'CASCADE'
        );

        $this->batchInsert('magazine', ['name', 'author_id1', 'author_id2',
        ], [['Руслан и Людмила', 1, 2],
          ['Собачье сердце', 5, null],
          ['Кобзарь', 3, 4],]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%author}}`
        $this->dropForeignKey(
            '{{%fk-magazine-author_id1}}',
            '{{%magazine}}'
        );

        // drops index for column `author_id1`
        $this->dropIndex(
            '{{%idx-magazine-author_id1}}',
            '{{%magazine}}'
        );

        // drops foreign key for table `{{%author}}`
        $this->dropForeignKey(
            '{{%fk-magazine-author_id2}}',
            '{{%magazine}}'
        );

        // drops index for column `author_id2`
        $this->dropIndex(
            '{{%idx-magazine-author_id2}}',
            '{{%magazine}}'
        );

        // drops foreign key for table `{{%author}}`
        $this->dropForeignKey(
            '{{%fk-magazine-author_id3}}',
            '{{%magazine}}'
        );

        // drops index for column `author_id3`
        $this->dropIndex(
            '{{%idx-magazine-author_id3}}',
            '{{%magazine}}'
        );

        // drops foreign key for table `{{%author}}`
        $this->dropForeignKey(
            '{{%fk-magazine-author_id4}}',
            '{{%magazine}}'
        );

        // drops index for column `author_id4`
        $this->dropIndex(
            '{{%idx-magazine-author_id4}}',
            '{{%magazine}}'
        );

        // drops foreign key for table `{{%author}}`
        $this->dropForeignKey(
            '{{%fk-magazine-author_id5}}',
            '{{%magazine}}'
        );

        // drops index for column `author_id5`
        $this->dropIndex(
            '{{%idx-magazine-author_id5}}',
            '{{%magazine}}'
        );

        $this->dropTable('{{%magazine}}');
    }
}
