<?php

// +------------------------------------------------------------------------+
// | AuthPuppy Authentication Server                                        |
// | ===============================                                        |
// |                                                                        |
// | AuthPuppy is the new generation of authentication server for           |
// | a wifidog based captive portal suite                                   |
// +------------------------------------------------------------------------+
// | PHP version 5 required.                                                |
// +------------------------------------------------------------------------+
// | Homepage:     http://www.authpuppy.org/                                |
// | Launchpad:    http://www.launchpad.net/authpuppy                       |
// +------------------------------------------------------------------------+
// | This program is free software; you can redistribute it and/or modify   |
// | it under the terms of the GNU General Public License as published by   |
// | the Free Software Foundation; either version 2 of the License, or      |
// | (at your option) any later version.                                    |
// |                                                                        |
// | This program is distributed in the hope that it will be useful,        |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of         |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the          |
// | GNU General Public License for more details.                           |
// |                                                                        |
// | You should have received a copy of the GNU General Public License along|
// | with this program; if not, write to the Free Software Foundation, Inc.,|
// | 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.            |
// +------------------------------------------------------------------------+


/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addnodes extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('nodes', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => 8,
              'autoincrement' => true,
              'primary' => true,
             ),
             'name' => 
             array(
              'type' => 'string',
              'notnull' => true,
              'length' => 255,
             ),
             'gw_id' => 
             array(
              'type' => 'string',
              'notnull' => true,
              'unique' => true,
              'length' => 255,
             ),
             'last_heartbeat_at' => 
             array(
              'type' => 'timestamp',
              'length' => 25,
             ),
             'last_heartbeat_ip' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'last_heartbeat_sys_uptime' => 
             array(
              'type' => 'integer',
              'length' => 8,
             ),
             'last_heartbeat_sys_memfree' => 
             array(
              'type' => 'integer',
              'length' => 8,
             ),
             'last_heartbeat_sys_load' => 
             array(
              'type' => 'float',
              'length' => NULL,
             ),
             'last_heartbeat_wifidog_uptime' => 
             array(
              'type' => 'integer',
              'length' => 8,
             ),
             'latitude' => 
             array(
              'type' => 'float',
              'length' => NULL,
             ),
             'longitude' => 
             array(
              'type' => 'float',
              'length' => NULL,
             ),
             'created_at' => 
             array(
              'notnull' => true,
              'type' => 'timestamp',
              'length' => 25,
             ),
             'updated_at' => 
             array(
              'notnull' => true,
              'type' => 'timestamp',
              'length' => 25,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'id',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('nodes');
    }
}