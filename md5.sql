
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `md5` (
  `md5_hash` varchar(32) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`md5_hash`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `md5` (`md5_hash`, `text`) VALUES
('21232f297a57a5a743894a0e4a801fc3', 'admin');
