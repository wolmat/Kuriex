CREATE DATABASE  IF NOT EXISTS `kuriex` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `kuriex`;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

/*!40000 ALTER TABLE filia DISABLE KEYS */;
INSERT INTO filia VALUES (102,'bolesławiecki',2),(104,'aleksandrowski',4),(106,'bialski',6),(108,'gorzowski',8),(110,'bełchatowski',10),(112,'bocheński',12),(114,'białobrzeski',14),(116,'brzeski',16),(118,'bieszczadzki',18),(120,'augustowski',20),(122,'bytowski',22),(124,'będziński',24),(126,'buski',26),(128,'bartoszycki',28),(130,'chodzieski',30),(132,'białogardzki',32),(202,'dzierżoniowski',2),(204,'brodnicki',4),(206,'biłgorajski',6),(208,'krośnieński',8),(210,'kutnowski',10),(212,'brzeski',12),(214,'ciechanowski',14),(216,'głubczycki',16),(218,'brzozowski',18),(220,'białostocki',20),(222,'chojnicki',22),(224,'bielski',24),(226,'jędrzejowski',26),(228,'braniewski',28),(230,'czarnkowsko-trzciane',30),(232,'choszczeński',32),(302,'głogowski',2),(304,'bydgoski',4),(306,'chełmski',6),(308,'międzyrzecki',8),(310,'łaski',10),(312,'chrzanowski',12),(314,'garwoliński',14),(316,'kędzierzyńsko-koziel',16),(318,'dębicki',18),(320,'bielski',20),(322,'człuchowski',22),(324,'cieszyński',24),(326,'kazimierski',26),(328,'działdowski',28),(330,'gnieźnieński',30),(332,'drawski',32),(402,'górowski',2),(404,'chełmiński',4),(406,'hrubieszowski',6),(408,'nowosolski',8),(410,'łęczycki',10),(412,'dąbrowski',12),(414,'gostyniński',14),(416,'kluczborski',16),(418,'jarosławski',18),(420,'grajewski',20),(422,'gdański',22),(424,'częstochowski',24),(426,'kielecki',26),(428,'elbląski',28),(430,'gostyński',30),(432,'goleniowski',32),(502,'jaworski',2),(504,'golubsko-dobrzyński',4),(506,'janowski',6),(508,'słubicki',8),(510,'łowicki',10),(512,'gorlicki',12),(514,'grodziski',14),(516,'krapkowicki',16),(518,'jasielski',18),(520,'hajnowski',20),(522,'kartuski',22),(524,'gliwicki',24),(526,'konecki',26),(528,'ełcki',28),(530,'grodziski',30),(532,'gryficki',32),(602,'jeleniogórski',2),(604,'grudziądzki',4),(606,'krasnostawski',6),(608,'strzelecko-drezdenec',8),(610,'łódzki wschodni',10),(612,'krakowski',12),(614,'grójecki',14),(616,'namysłowski',16),(618,'kolbuszowski',18),(620,'kolneński',20),(622,'kościerski',22),(624,'kłobucki',24),(626,'opatowski',26),(628,'giżycki',28),(630,'jarociński',30),(632,'gryfiński',32),(702,'kamiennogórski',2),(704,'inowrocławski',4),(706,'kraśnicki',6),(708,'sulęciński',8),(710,'opoczyński',10),(712,'limanowski',12),(714,'kozienicki',14),(716,'nyski',16),(718,'krośnieński',18),(720,'łomżyński',20),(722,'kwidzyński',22),(724,'lubliniecki',24),(726,'ostrowiecki',26),(728,'iławski',28),(730,'kaliski',30),(732,'kamieński',32),(802,'kłodzki',2),(804,'lipnowski',4),(806,'lubartowski',6),(808,'świebodziński',8),(810,'pabianicki',10),(812,'miechowski',12),(814,'legionowski',14),(816,'oleski',16),(818,'leżajski',18),(820,'moniecki',20),(822,'lęborski',22),(824,'mikołowski',24),(826,'pińczowski',26),(828,'kętrzyński',28),(830,'kępiński',30),(832,'kołobrzeski',32),(902,'legnicki',2),(904,'mogileński',4),(906,'lubelski',6),(908,'zielonogórski',8),(910,'pajęczański',10),(912,'myślenicki',12),(914,'lipski',14),(916,'opolski',16),(918,'lubaczowski',18),(920,'sejneński',20),(922,'malborski',22),(924,'myszkowski',24),(926,'sandomierski',26),(928,'lidzbarski',28),(930,'kolski',30),(932,'koszaliński',32),(1002,'lubański',2),(1004,'nakielski',4),(1006,'łęczyński',6),(1008,'żagański',8),(1010,'piotrkowski',10),(1012,'nowosądecki',12),(1014,'łosicki',14),(1016,'prudnicki',16),(1018,'łańcucki',18),(1020,'siemiatycki',20),(1022,'nowodworski',22),(1024,'pszczyński',24),(1026,'skarżyski',26),(1028,'mrągowski',28),(1030,'koniński',30),(1032,'myśliborski',32),(1102,'lubiński',2),(1104,'radziejowski',4),(1106,'łukowski',6),(1108,'żarski',8),(1110,'poddębicki',10),(1112,'nowotarski',12),(1114,'makowski',14),(1116,'strzelecki',16),(1118,'mielecki',18),(1120,'sokólski',20),(1122,'pucki',22),(1124,'raciborski',24),(1126,'starachowicki',26),(1128,'nidzicki',28),(1130,'kościański',30),(1132,'policki',32),(1202,'lwówecki',2),(1204,'rypiński',4),(1206,'opolski',6),(1208,'wschowski',8),(1210,'radomszczański',10),(1212,'olkuski',12),(1214,'miński',14),(1218,'niżański',18),(1220,'suwalski',20),(1222,'słupski',22),(1224,'rybnicki',24),(1226,'staszowski',26),(1228,'nowomiejski',28),(1230,'krotoszyński',30),(1232,'pyrzycki',32),(1302,'milicki',2),(1304,'sępoleński',4),(1306,'parczewski',6),(1310,'rawski',10),(1312,'oświęcimski',12),(1314,'mławski',14),(1318,'przemyski',18),(1320,'wysokomazowiecki',20),(1322,'starogardzki',22),(1324,'tarnogórski',24),(1326,'włoszczowski',26),(1328,'olecki',28),(1330,'leszczyński',30),(1332,'sławieński',32),(1402,'oleśnicki',2),(1404,'świecki',4),(1406,'puławski',6),(1410,'sieradzki',10),(1412,'proszowicki',12),(1414,'nowodworski',14),(1418,'przeworski',18),(1420,'zambrowski',20),(1422,'tczewski',22),(1424,'bieruńsko-lędziński',24),(1428,'olsztyński',28),(1430,'międzychodzki',30),(1432,'stargardzki',32),(1502,'oławski',2),(1504,'toruński',4),(1506,'radzyński',6),(1510,'skierniewicki',10),(1512,'suski',12),(1514,'ostrołęcki',14),(1518,'ropczycko-sędziszows',18),(1522,'wejherowski',22),(1524,'wodzisławski',24),(1528,'ostródzki',28),(1530,'nowotomyski',30),(1532,'szczecinecki',32),(1602,'polkowicki',2),(1604,'tucholski',4),(1606,'rycki',6),(1610,'tomaszowski',10),(1612,'tarnowski',12),(1614,'ostrowski',14),(1618,'rzeszowski',18),(1622,'sztumski',22),(1624,'zawierciański',24),(1628,'piski',28),(1630,'obornicki',30),(1632,'świdwiński',32),(1702,'strzeliński',2),(1704,'wąbrzeski',4),(1706,'świdnicki',6),(1710,'wieluński',10),(1712,'tatrzański',12),(1714,'otwocki',14),(1718,'sanocki',18),(1724,'żywiecki',24),(1728,'szczycieński',28),(1730,'ostrowski',30),(1732,'wałecki',32),(1802,'średzki',2),(1804,'włocławski',4),(1806,'tomaszowski',6),(1810,'wieruszowski',10),(1812,'wadowicki',12),(1814,'piaseczyński',14),(1818,'stalowowolski',18),(1828,'gołdapski',28),(1830,'ostrzeszowski',30),(1832,'łobeski',32),(1902,'świdnicki',2),(1904,'żniński',4),(1906,'włodawski',6),(1910,'zduńskowolski',10),(1912,'wielicki',12),(1914,'płocki',14),(1918,'strzyżowski',18),(1928,'węgorzewski',28),(1930,'pilski',30),(2002,'trzebnicki',2),(2006,'zamojski',6),(2010,'zgierski',10),(2014,'płoński',14),(2018,'tarnobrzeski',18),(2030,'pleszewski',30),(2102,'wałbrzyski',2),(2110,'brzeziński',10),(2114,'pruszkowski',14),(2118,'leski',18),(2130,'poznański',30),(2202,'wołowski',2),(2214,'przasnyski',14),(2230,'rawicki',30),(2302,'wrocławski',2),(2314,'przysuski',14),(2330,'słupecki',30),(2402,'ząbkowicki',2),(2414,'pułtuski',14),(2430,'szamotulski',30),(2502,'zgorzelecki',2),(2514,'radomski',14),(2530,'średzki',30),(2602,'złotoryjski',2),(2614,'siedlecki',14),(2630,'śremski',30),(2714,'sierpecki',14),(2730,'turecki',30),(2814,'sochaczewski',14),(2830,'wągrowiecki',30),(2914,'sokołowski',14),(2930,'wolsztyński',30),(3014,'szydłowiecki',14),(3030,'wrzesiński',30),(3130,'złotowski',30),(3214,'warszawski zachodni',14),(3314,'węgrowski',14),(3414,'wołomiński',14),(3514,'wyszkowski',14),(3614,'zwoleński',14),(3714,'żuromiński',14),(3814,'żyrardowski',14);
/*!40000 ALTER TABLE filia ENABLE KEYS */;

/*!40000 ALTER TABLE klient DISABLE KEYS */;
INSERT INTO klient VALUES (82072379224,'Piotr','Borowski','Złota 36',752527843,'pborowski@gmail.com',11),(92110943113,'Adam','Zieliński','Bzowa 7',624141752,'azielinski@gmail.com',20),(96110753417,'Anna','Wójcik','Piękna 214',627947253,'awojcik@gmail.com',56),(98060492215,'Agnieszka','Dębkowska','Zamkowa 4',842524623,'adebkowska@gmail.com',9),(99081972885,'Jan','Nowak','Lipowa 14',842524623,'janowak@gmail.com',15);
/*!40000 ALTER TABLE klient ENABLE KEYS */;

/*!40000 ALTER TABLE obszar DISABLE KEYS */;
INSERT INTO obszar VALUES (2,'dolnośląskie','Obszar woj. dolnośląskiego'),(4,'kujawsko-pomorskie','Obszar woj. kujawsko-pomorskiego'),(6,'lubelskie','Obszar woj. lubelskiego'),(8,'lubuskie','Obszar woj. lubuskiego'),(10,'łódzkie','Obszar woj. łódzkiego'),(12,'małopolskie','Obszar woj. małopolskiego'),(14,'mazowieckie','Obszar woj. mazowieckiego'),(16,'opolskie','Obszar woj. opolskiego'),(18,'podkarpackie','Obszar woj. podkarpackiego'),(20,'podlaskie','Obszar woj. podlaskiego'),(22,'pomorskie','Obszar woj. pomorskiego'),(24,'śląskie','Obszar woj. śląskiego'),(26,'świętokrzyskie','Obszar woj. świętokrzyskiego'),(28,'warmińsko-mazurskie','Obszar woj. warmińsko-mazurskiego'),(30,'wielkopolskie','Obszar woj. wielkopolskiego'),(32,'zachodniopomorskie','Obszar woj. zachodniopomorskiego');
/*!40000 ALTER TABLE obszar ENABLE KEYS */;

/*!40000 ALTER TABLE pojazd DISABLE KEYS */;
INSERT INTO pojazd VALUES (1,'Ford','Transit',1477),(2,'Volkswagen','Crafter',1290);
/*!40000 ALTER TABLE pojazd ENABLE KEYS */;

/*!40000 ALTER TABLE rejon DISABLE KEYS */;
INSERT INTO rejon VALUES (1,'Gierałtów',NULL,102),(2,'Kamieniec',NULL,104),(3,'Leszczanka',NULL,106),(4,'Mystki',NULL,108),(5,'Strzyżewice-Gajówka',NULL,110),(6,'Opaka',NULL,112),(7,'Paulanka',NULL,114),(8,'Rataje',NULL,116),(9,'Tworylne',NULL,118),(10,'Kunicha',NULL,120),(11,'Łączka',NULL,122),(12,'Pasieka',NULL,124),(13,'Kostki Duże',NULL,126),(14,'Sporwiny',NULL,128),(15,'Borowo',NULL,130),(16,'Kowańcz',NULL,132),(17,'Kośmin',NULL,202),(18,'Dzierzno',NULL,204),(19,'Biszcza-Osiedle',NULL,206),(20,'Dąbki',NULL,208),(21,'Wysoka Duża',NULL,210),(22,'Zaszuminie',NULL,212),(23,'Kowalewko',NULL,214),(24,'Jakubowice',NULL,216),(25,'Skokówka',NULL,218),(26,'Skroblaki',NULL,220),(27,'Wybudowania Ostrowic',NULL,222),(28,'Mała Rudzica',NULL,224),(29,'Rakówek',NULL,226),(30,'Demity',NULL,228),(31,'Wieleń',NULL,230),(32,'Drawnik',NULL,232),(33,'Zabiele',NULL,302),(34,'Dąbrówka Nowa',NULL,304),(35,'Hredków',NULL,306),(36,'Nowiny',NULL,308),(37,'Buczek-Lgów',NULL,310),(38,'Mały Rozkochów',NULL,312),(39,'Ostrożeń Drugi',NULL,314),(40,'Opatrzność',NULL,316),(41,'Borki',NULL,318),(42,'Kalnica',NULL,320),(43,'Żukowo',NULL,322),(44,'Dębina',NULL,324),(45,'Granica',NULL,326),(46,'Miłostajki',NULL,328),(47,'Strzyżewo Paczkowe',NULL,330),(48,'Stawno',NULL,332),(49,'Tarpno',NULL,402),(50,'Bruki Kokocka',NULL,404),(51,'Sahryń',NULL,406),(52,'Nowe Miasteczko',NULL,408),(53,'Opiesinek',NULL,410),(54,'Gęsica',NULL,412),(55,'Huta Zaborowska',NULL,414),(56,'Zajdak',NULL,416),(57,'Podedwór',NULL,418),(58,'Rydzewo',NULL,420),(59,'Postołowo',NULL,422),(60,'Julianka',NULL,424),(61,'Zazdrość',NULL,426),(62,'Marianka',NULL,428),(63,'Maciejewo',NULL,430),(64,'Grabina',NULL,432),(65,'Sady Górne',NULL,502),(66,'Srebrniki',NULL,504),(67,'Zagóra',NULL,506),(68,'Lubień',NULL,508),(69,'Pierwsza Kolonia',NULL,510),(70,'Zagórze',NULL,512),(71,'Karolina',NULL,514),(72,'Zabierzów',NULL,516),(73,'Rokicina',NULL,518),(74,'Ancuty',NULL,520),(75,'Zajezierze',NULL,522),(76,'Brzeg',NULL,524),(77,'Małachów',NULL,526),(78,'Bajtkowo',NULL,528),(79,'Gola',NULL,530),(80,'Trzebiatów',NULL,532),(81,'Antoniów',NULL,602),(82,'Rywałd',NULL,604),(83,'Chorupnik-Kolonia',NULL,606),(84,'Gilów',NULL,608),(85,'Jerzmanów',NULL,610),(86,'Parcelacja',NULL,612),(87,'Machnatka',NULL,614),(88,'Pokój',NULL,616),(89,'Guściory',NULL,618),(90,'Kamińskie',NULL,620),(91,'Nowy Dwór',NULL,622),(92,'Dąbrówka',NULL,624),(93,'Kolonie',NULL,626),(94,'Ławki',NULL,628),(95,'Tumidaj',NULL,630),(96,'Lubiczyn',NULL,632),(97,'Uniemyśl',NULL,702),(98,'Wolany',NULL,704),(99,'Huta',NULL,706),(100,'Żarzyn',NULL,708),(101,'Zapowiedź',NULL,710),(102,'Klenie',NULL,712),(103,'Grobie',NULL,714),(104,'Kępnica',NULL,716),(105,'Myszkowskie',NULL,718),(106,'Bienduszka',NULL,720),(107,'Obrzynowo',NULL,722),(108,'Woźniki',NULL,724),(109,'Dwór',NULL,726),(110,'Mątyki',NULL,728),(111,'Kurza',NULL,730),(112,'Laska',NULL,732),(113,'Darnków',NULL,802),(114,'Lipno-Rumunki Drugie',NULL,804),(115,'Roczniaki',NULL,806),(116,'Kręcko',NULL,808),(117,'Prusinowice',NULL,810),(118,'Toporów',NULL,812),(119,'Święcienica',NULL,814),(120,'Kopalina',NULL,816),(121,'Kolonia Polska',NULL,818),(122,'Downary',NULL,820),(123,'Bargędzino',NULL,822),(124,'Śmiłowice',NULL,824),(125,'Krzyżanowice Dolne',NULL,826),(126,'Wymiary',NULL,828),(127,'Grzybów',NULL,830),(128,'Gwizd',NULL,832),(129,'Raczkowa',NULL,902),(130,'Sadowiec',NULL,904),(131,'Świdnik Duży',NULL,906),(132,'Będów',NULL,908),(133,'Mazaniec',NULL,910),(134,'Krzywańskowa',NULL,912),(135,'Kolonia Rogalin',NULL,914),(136,'Dąbrowa',NULL,916),(137,'Witki',NULL,918),(138,'Hołny Mejera',NULL,920),(139,'Ząbrowo',NULL,922),(140,'Borek',NULL,924),(141,'Olbierzowice',NULL,926),(142,'Zajączki',NULL,928),(143,'Janina',NULL,930),(144,'Rzeczyca Wielka',NULL,932),(145,'Rudzica',NULL,1002),(146,'Ostrowo',NULL,1004),(147,'Zawadów',NULL,1006),(148,'Jelenin Górny',NULL,1008),(149,'Wygnanów',NULL,1010),(150,'Trześniowy Groń',NULL,1012),(151,'Kolonia',NULL,1014),(152,'Radostynia',NULL,1016),(153,'Góra',NULL,1018),(154,'Cecele',NULL,1020),(155,'Gozdawa',NULL,1022),(156,'Jarząbkowice',NULL,1024),(157,'Brzeście Górne',NULL,1026),(158,'Mostek',NULL,1028),(159,'Tartak',NULL,1030),(160,'Kinice',NULL,1032),(161,'Brodów',NULL,1102),(162,'Góry',NULL,1104),(163,'Praga',NULL,1106),(164,'Siedlec',NULL,1108),(165,'Paulina',NULL,1110),(166,'Gwiżdżówka',NULL,1112),(167,'Papierny Borek',NULL,1114),(168,'Borycz',NULL,1116),(169,'Podlas',NULL,1118),(170,'Brzozowe Błoto',NULL,1120),(171,'Meksyk',NULL,1122),(172,'Brzeźnica',NULL,1124),(173,'Klepacze',NULL,1126),(174,'Janowiec-Zdzięty',NULL,1128),(175,'Wydorowo',NULL,1130),(176,'Barnisław',NULL,1132),(177,'Brunów',NULL,1202),(178,'Karczemka',NULL,1204),(179,'Piotrawin-Kolonia',NULL,1206),(180,'Krzydłowiczki',NULL,1208),(181,'Elżbietów',NULL,1210),(182,'Bór Biskupi',NULL,1212),(183,'Nart',NULL,1214),(184,'Mule',NULL,1218),(185,'Malinówka',NULL,1220),(186,'Żelazo',NULL,1222),(187,'Czuchów',NULL,1224),(188,'Radzików',NULL,1226),(189,'Pod Nowy Dwór',NULL,1228),(190,'Rozdrażewek',NULL,1230),(191,'Pyrzyce',NULL,1232),(192,'Wierzbina',NULL,1302),(193,'Zakrzewska Osada',NULL,1304),(194,'Czerniów',NULL,1306),(195,'Matyldów',NULL,1310),(196,'Zasole',NULL,1312),(197,'Żmijewo-Ponki',NULL,1314),(198,'Zadąbrowie',NULL,1318),(199,'Siennica-Łukasze',NULL,1320),(200,'Czubek',NULL,1322),(201,'Brynica',NULL,1324),(202,'Dzierzgów',NULL,1326),(203,'Czerwony Dwór',NULL,1328),(204,'Ogrody',NULL,1330),(205,'Jeżyce',NULL,1332),(206,'Wydzierno',NULL,1402),(207,'Ernestowo',NULL,1404),(208,'Mięćmierz',NULL,1406),(209,'Gęsówka',NULL,1410),(210,'Klasztorki',NULL,1412),(211,'Zaborze',NULL,1414),(212,'Kowale',NULL,1418),(213,'Krajewo Białe',NULL,1420),(214,'Bielica',NULL,1422),(215,'Kolonia Piast',NULL,1424),(216,'Purda',NULL,1428),(217,'Prusim',NULL,1430),(218,'Wielichówko',NULL,1432),(219,'Wierzbno',NULL,1502),(220,'Pustynia',NULL,1504),(221,'Zawierzcholas',NULL,1506),(222,'Humin-Dobra Ziemskie',NULL,1510),(223,'Rusinowa',NULL,1512),(224,'Nasiadki',NULL,1514),(225,'Stawki',NULL,1518),(226,'Kisewko',NULL,1522),(227,'Gołkowice',NULL,1524),(228,'Bogaczewo',NULL,1528),(229,'Zachodzko',NULL,1530),(230,'Spore',NULL,1532),(231,'Śrem',NULL,1602),(232,'Lisiny',NULL,1604),(233,'Wojciechówka',NULL,1606),(234,'Swolszewice Małe',NULL,1610),(235,'Polanka',NULL,1612),(236,'Kolonia Jelenie',NULL,1614),(237,'Folwark',NULL,1618),(238,'Dąbrówka Malborska',NULL,1622),(239,'Przymiary',NULL,1624),(240,'Nowe Uściany',NULL,1628),(241,'Żołędzin',NULL,1630),(242,'Kłokówko',NULL,1632),(243,'Wieliczna',NULL,1702),(244,'Małe Pułkowo',NULL,1704),(245,'Adampol',NULL,1706),(246,'Wierzchlas',NULL,1710),(247,'Jesionkówka',NULL,1712),(248,'Szkolmaki',NULL,1714),(249,'Przysiółek',NULL,1718),(250,'Kościelni',NULL,1724),(251,'Korpele',NULL,1728),(252,'Zakrzewki',NULL,1730),(253,'Kalinówka',NULL,1732),(254,'Gałów',NULL,1802),(255,'Ku Wólce',NULL,1804),(256,'Stawki',NULL,1806),(257,'Zamoście',NULL,1810),(258,'Urbanki',NULL,1812),(259,'Chosna',NULL,1814),(260,'Nad Jeziorem',NULL,1818),(261,'Kruki',NULL,1828),(262,'Potaśnia',NULL,1830),(263,'Łabuń Wielki',NULL,1832),(264,'Kłaczyna',NULL,1902),(265,'Biskupiec',NULL,1904),(266,'Włodawa',NULL,1906),(267,'Tarnówka',NULL,1910),(268,'Dąbrówka',NULL,1912),(269,'Dobrosielice Pierwsz',NULL,1914),(270,'Za Wodą',NULL,1918),(271,'Zielony Ostrów',NULL,1928),(272,'Kruszki',NULL,1930),(273,'Sanie',NULL,2002),(274,'Borowina',NULL,2006),(275,'Smardzew',NULL,2010),(276,'Drozdowo',NULL,2014),(277,'Smykle',NULL,2018),(278,'Strzyżew',NULL,2030),(279,'Dworzysko',NULL,2102),(280,'Stare Koluszki',NULL,2110),(281,'Falenty Duże',NULL,2114),(282,'Dział',NULL,2118),(283,'Dębienko',NULL,2130),(284,'Krzydlina Wielka',NULL,2202),(285,'Trzcianka',NULL,2214),(286,'Dąbrówka',NULL,2230),(287,'Stępin',NULL,2302),(288,'Gajówka',NULL,2314),(289,'Nowa Górka',NULL,2330),(290,'Służejów',NULL,2402),(291,'Zamoście',NULL,2414),(292,'Binińskie Huby',NULL,2430),(293,'Nowoszyce',NULL,2502),(294,'Stara Wieś',NULL,2514),(295,'Dzierznica',NULL,2530),(296,'Jasionek',NULL,2602),(297,'Kaliski',NULL,2614),(298,'Piotrowo',NULL,2630),(299,'Kotarczyn',NULL,2714),(300,'Wincentów',NULL,2730),(301,'Dębsk-Folwark',NULL,2814),(302,'Włókna',NULL,2830),(303,'Kolonie Albinowskie',NULL,2914),(304,'Tuchorzyniec',NULL,2930),(305,'Borki',NULL,3014),(306,'Piaski',NULL,3030),(307,'Ciosaniec',NULL,3130),(308,'Grądki',NULL,3214),(309,'Butlerów',NULL,3314),(310,'Szlędaki',NULL,3414),(311,'Dalekie-Tartak',NULL,3514),(312,'Pastwiska',NULL,3614),(313,'Wieluń-Zalesie',NULL,3714),(314,'Chrząszczew',NULL,3814);
/*!40000 ALTER TABLE rejon ENABLE KEYS */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
