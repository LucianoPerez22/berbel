<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211201205118 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {   
        $this->addSql("INSERT INTO user (username, password, salt, name, last_name, email, enabled, super_admin) VALUES
            ('admin','$2y$12$11de78266ffe86b3ccaffuGRnj9p6lpnTtfrHiN6QQ0Yn3/Q0b/WO','11de78266ffe86b3ccaff2f9a75d958c83036016',
            'Admin', 'Admin', 'admin@admin.com', 1, 1)");

        $this->addSql("INSERT INTO role (name, title, description,module) VALUES
            ('ROLE_USER_LIST', 'User list', 'Permission to view the system user list','User'),
            ('ROLE_USER_NEW', 'New user', 'Permission to add a new user','User'),
            ('ROLE_USER_EDIT', 'Edit user', 'Permission to edit a system user','User'),
            ('ROLE_USER_VIEW', 'View user', 'Permission to view a system user','User'),
            ('ROLE_USER_DELETE', 'Delete user', 'Permission to delete a system user','User'),
            ('ROLE_GROUP_LIST', 'Permission groups list', 'Permission to view the permission group list','Permission group'),
            ('ROLE_GROUP_NEW', 'New group', 'Permission to add a new permission group','Permission group'),
            ('ROLE_GROUP_EDIT', 'Edit group', 'Permission to edit a permission group','Permission group'),
            ('ROLE_GROUP_VIEW', 'View group', 'Permission to view a permission group','Permission group'),
            ('ROLE_GROUP_DELETE', 'Delete group', 'Permission to delete a permission group','Permission group')
            ");

    }

    public function down(Schema $schema) : void
    {
        
    }
}