<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%author}}`.
 */
class m201029_151449_create_author_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%author}}', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string(128)->notNull(),
            'middle_name' => $this->string(128),
            'last_name' => $this->string(128)->notNull(),
        ]);

        $this->batchInsert('author', ['first_name', 'middle_name', 'last_name'], [['Александ', 'Сергеевич', 'Пушкин'],
                                                                                          ['Николай', 'Васильевич', 'Гоголь'],
                                                                                          ['Тарас', 'Григорьевич', 'Шевченко'],
                                                                                          ['Михаил', 'Юрьевич', 'Лермантов'],
                                                                                          ['Михаил','Афанасьевич', 'Булгаков'],]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%author}}');
    }
}
