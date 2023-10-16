-- -----------------------------
-- table structure for student
-- -----------------------------

CREATE TABLE `stdinfo` . `student` (
  `Id` int(11) NOT NULL auto_increment,
  `Name` varchar(255) default NULL,
  `Email` varchar(255) default NULL,
  `DateOfBirth` datetime default NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `stdinfo` . `student` VALUES ('1', 'John Doe', 'jdoe@example.org', null);
