<?php exit;?>	2015-01-07 10:20:10	1146	Table 'gamedb.player_ingot_change_record' doesn't exist	SELECT SUM(change_charge_value)/10 AS consume FROM player_ingot_change_record a LEFT JOIN player b ON a.player_id=b.id WHERE vip_level > 0 AND type<>35 AND change_charge_value < 0 AND is_tester=0 AND change_time>='1420560000'
<?php exit;?>	2015-01-07 10:20:14	1146	Table 'gamedb.player_role_data' doesn't exist	SELECT a.*,b.*,c.level as spirit_lv,d.name as spirit_name,e.deploy_mode_id FROM player_role a						LEFT JOIN player_role_data b ON a.id=b.player_role_id 						LEFT JOIN player_role_spirit_state c ON a.id=c.player_role_id 						LEFT JOIN spirit_state d ON c.spirit_state_id=d.id 						LEFT JOIN player_deploy_grid e ON a.id=e.player_role_id AND e.deploy_mode_id=0 						WHERE a.player_id=10000095 ORDER BY state ASC,a.id ASC
<?php exit;?>	2015-01-07 10:20:49	1054	Unknown column 'name' in 'field list'	SELECT `id`,`name` FROM `gamedb`.`role`
<?php exit;?>	2015-01-07 10:21:24	1054	Unknown column 'name' in 'field list'	SELECT `lock`,`name` FROM `gamedb`.`mission`
<?php exit;?>	2015-01-07 10:39:01	1054	Unknown column 'b.first_login_time' in 'field list'	select a.*,b.first_login_time,b.last_login_time from player a left join player_trace on a.id=b.player_id where a.id='10000095'
<?php exit;?>	2015-01-07 11:14:31	1064	You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'jeft join hero c on b.hero_id=c.id where a.player_id='10000038'' at line 1	select a.*,c.name_text_id from player_role a left join role b on a.role_id=b.id jeft join hero c on b.hero_id=c.id where a.player_id='10000038'
<?php exit;?>	2015-01-07 11:18:17	1054	Unknown column 'grid_id' in 'where clause'	SELECT * FROM `gamedb`.`player_item` WHERE player_id=10000038 AND player_role_id=231 AND grid_id>200 AND grid_id<301 ORDER BY grid_id ASC
<?php exit;?>	2015-01-07 11:50:41	1064	You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'where d.player_id='10000038'' at line 1	select e.player_role_id from player_deploy d left join player_deploy_grid e on a.player_id = e.player_id and d.last_deploy_id=e.deploy_id where where d.player_id='10000038'
<?php exit;?>	2015-01-07 11:51:06	1064	You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'where d.player_id='10000038'' at line 1	select e.player_role_id from player_deploy d left join player_deploy_grid e on d.player_id = e.player_id and d.last_deploy_id=e.deploy_id where where d.player_id='10000038'
<?php exit;?>	2015-01-07 13:51:41	1146	Table 'gamedb.player_ingot_change_record' doesn't exist	SELECT SUM(change_charge_value)/10 AS consume FROM player_ingot_change_record a LEFT JOIN player b ON a.player_id=b.id WHERE vip_level > 0 AND type<>35 AND change_charge_value < 0 AND is_tester=0 AND change_time>='1420560000'
<?php exit;?>	2015-01-07 14:20:19	1054	Unknown column 'grid_id' in 'where clause'	SELECT * FROM `gamedb`.`player_item` WHERE player_id=10000038 AND player_role_id=231 AND grid_id>200 AND grid_id<301 ORDER BY grid_id ASC
<?php exit;?>	2015-01-07 14:37:07	1054	Unknown column 'grid_id' in 'where clause'	SELECT * FROM `gamedb`.`player_item` WHERE player_id=10000038 AND player_role_id=181 AND grid_id>200 AND grid_id<301 ORDER BY grid_id ASC
<?php exit;?>	2015-01-07 14:45:18	1054	Unknown column 'grid_id' in 'where clause'	SELECT * FROM `gamedb`.`player_item` WHERE player_id=10000038 AND player_role_id=181 AND grid_id>200 AND grid_id<301 ORDER BY grid_id ASC
<?php exit;?>	2015-01-07 14:48:12	1054	Unknown column 'grid_id' in 'where clause'	SELECT * FROM `gamedb`.`player_item` WHERE player_id=10000013 AND player_role_id=97 AND grid_id>200 AND grid_id<301 ORDER BY grid_id ASC
<?php exit;?>	2015-01-07 14:50:12	1054	Unknown column 'type_id' in 'where clause'	SELECT * FROM `gamedb`.`item` WHERE id IN (10) OR type_id IN (22000, 23000)
<?php exit;?>	2015-01-07 17:31:30	1146	Table 'gamedb.player_ingot_change_record' doesn't exist	SELECT SUM(change_charge_value)/10 AS consume FROM player_ingot_change_record a LEFT JOIN player b ON a.player_id=b.id WHERE vip_level > 0 AND type<>35 AND change_charge_value < 0 AND is_tester=0 AND change_time>='1420560000'
<?php exit;?>	2015-01-07 17:32:31	1146	Table 'gamedb.player_ingot_change_record' doesn't exist	SELECT SUM(change_charge_value)/10 AS consume FROM player_ingot_change_record a LEFT JOIN player b ON a.player_id=b.id WHERE vip_level > 0 AND type<>35 AND change_charge_value < 0 AND is_tester=0 AND change_time>='1420560000'
<?php exit;?>	2015-01-29 11:50:44	1146	Table 'gamedb.player_ingot_change_record' doesn't exist	SELECT SUM(change_charge_value)/10 AS consume FROM player_ingot_change_record a LEFT JOIN player b ON a.player_id=b.id WHERE vip_level > 0 AND type<>35 AND change_charge_value < 0 AND is_tester=0 AND change_time>='1422460800'
<?php exit;?>	2015-01-29 15:57:26	1146	Table 'gamedb.player_ingot_change_record' doesn't exist	SELECT SUM(change_charge_value)/10 AS consume FROM player_ingot_change_record a LEFT JOIN player b ON a.player_id=b.id WHERE vip_level > 0 AND type<>35 AND change_charge_value < 0 AND is_tester=0 AND change_time>='1422460800'
<?php exit;?>	2015-01-29 19:46:39	1146	Table 'gamedb.player_ingot_change_record' doesn't exist	SELECT SUM(change_charge_value)/10 AS consume FROM player_ingot_change_record a LEFT JOIN player b ON a.player_id=b.id WHERE vip_level > 0 AND type<>35 AND change_charge_value < 0 AND is_tester=0 AND change_time>='1422460800'
<?php exit;?>	2015-01-29 19:48:28	1146	Table 'gamedb.player_ingot_change_record' doesn't exist	SELECT SUM(change_charge_value)/10 AS consume FROM player_ingot_change_record a LEFT JOIN player b ON a.player_id=b.id WHERE vip_level > 0 AND type<>35 AND change_charge_value < 0 AND is_tester=0 AND change_time>='1422460800'