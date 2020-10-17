/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1_3306
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : 2do_prog_visual

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-10-17 17:18:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for artistas
-- ----------------------------
DROP TABLE IF EXISTS `artistas`;
CREATE TABLE `artistas` (
  `id_dj` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) NOT NULL,
  `edad` int(3) NOT NULL,
  `pais` varchar(80) NOT NULL,
  `discos` int(100) DEFAULT NULL,
  `biografia` mediumtext NOT NULL,
  `imagen` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_dj`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of artistas
-- ----------------------------
INSERT INTO `artistas` VALUES ('1', 'Loco Dice', '39', 'Alemania', '22', 'Loco Dice (nacido en Tunez como Yassine Ben Achour) es otro de los productores alemanes que sabe como girarte la cabecita porque están dotados de la empatía suficiente como para satisfacer al público de la misma manera que a los gestores de sellos con los que ha colaborado recientemente como Ovum Recodings, Cocoon o M_nus. Empezó su carrera como Dj de hip hop abriendo cancha en eventos organizados en Dusseldorf a otras figuras de la escena como Snoop Dog, Ice Cube o Jamiroquai. Después de girar por varios festivales intimó con los artistas de otras carpas al margen del hip hop que le introdujeron en la escena de techno y house donde ahora triunfa como la Coca-Cola. Fue entonces cuando descubrió la isla blanca para empezar a hacer de residente en el club ibicenco DC 10. Su relación con Timo Maas le abrió las puertas del estrellato con algún remix para la estrella alemana que le abrió las puertas a otras colaboraciones de peso como las anteriormente citadas. Como es un culo inquieto también ha trabajado como presentador del canal de televisión MTV. Recientemente dos pesos pesados como Richie Hawtin y Josh Wink han llamado a su puerta para trabajar en sus respectivos labels. En 2008 grabó su primer álbum para Desolat, sello que él mismo gestiona con Martin Buttrich, titulado 7 Dunham Place.', 'loco-dice.jpg');
INSERT INTO `artistas` VALUES ('2', 'Guti', '35', 'Argentina', '7', 'Guti es uno de los nuevos artistas argentinos que no tienen miedo de mezclar el jazz, el merengue, la salsa y el techno en sus producciones. Entre sus proyectos se encuentra La Merengue Downtempo Orchestra que forma junto a sus amigos Barem y Jorge Savoretti. Uno de sus referentes es Willie Colón del que dice es precursor en los 80 del house que vendría después (sic). Uno de los momentos más increíbles fue cuando Paco Osuna pinchó su tema Minibase del EP Piedritas (publicado en el sello Minibus) en la edición de 2007 del SAMC (South American Music Conference). Según comenta él mismo, escuchó el tema, se repuso del shock, lo bailó y después de la emoción solo pudo que irse a su casa a disfrutarlo. Loco Dice incluyó su track a medias con Damian Schwartz, Salon, en el mix The Lab 01 para el sello NRK Sound Division.', 'guti.jpg');
INSERT INTO `artistas` VALUES ('3', 'Barem', '35', 'Argentina', '5', 'Mauricio Barembuem a.k.a. Barem es uno de los nuevos valores emergentes de la escena de minimal bonaerense. A los 15 años de edad comenzó sus estudios musicales cuando decidió dar sus primeros pasos con la guitarra. Como tantos jóvenes de ahora, a los 19 años ya estaba dedicado completamente a la creación de música electrónica precisamente después de un viaje a Alemania en el que descubrió la escena minimal tan en boga actualmente. En 2003 empezó a enfrentarse a los riesgos de la cabina insistiendo siempre en un sonido envolvente y cerebral. ya en el estudio, los tracks de Barem se basan en un característico groove compuesto por samples sintéticos, elementos rítmicos analógicos e hipnóticas líneas de bajo, aunque como la mayoría de artistas latinoamericanos no pierde ocasión de integrar apuntes rítmicos de su querida Argentina. Sus tracks son utilizados regularmente por artistas tan de moda como Richie Hawtin, Ricardo Villalobos, Luciano, Someone Else o Troy Pierce, entre otros. Barem ha editado sus trabajos en sellos como Foundsound, Unfoundsound, m_nus, Goosehound o Phonocult. En 2011 publica su primer álbum precisamente en el sello de Hawtin, After The Storm.', 'barem.jpg');
INSERT INTO `artistas` VALUES ('4', 'Alexis Cabrera', '32', 'Argentina', '8', 'Alexis Cabrera comenzó a experimentar con la música digital desde muy joven y de manera autodidacta. El músico argentino ya contaba con 7 años de conservatorio a sus espaldas, siendo esta mezcla de antecedentes las que definirían su personalidad musical. Techno, house y tech house con mucho groove es el sonido característico de Cabrera, destacando sus actuaciones sobre el escenario, siempre en directo, nunca pinchando. En el 2007 publica su primer EP vía Unlock Recordings. Desde entonces ha producido incontables referencias en sellos como Jagoo, Minibus, Klectik Record, Bospherus, Underground, Vekton Music, Attary, Monique Music y SK Supreme.', 'alexis-cabrera.jpg');
INSERT INTO `artistas` VALUES ('5', 'Jorge Savoretti', '37', 'Argentina', '6', 'Con más de 20 años en el mundo de la música electrónica, JORGE SAVORETTI es un nombre icónico en la escena sudamericana.\r\n\r\nEl estrecho vínculo entre Savoretti y la música electrónica comenzó en 1993, cuando descubrió la música de baile en eventos de rave underground en su ciudad natal de Rosario, Argentina. En 1996, cuando tenía 15 años, rápidamente se colocó detrás de las plataformas giratorias.\r\n\r\n\r\nJorge comenzó una exitosa residencia en \"El Sotano\", uno de los clubes influyentes históricamente más importantes del underground argentino, trabajando allí durante tres temporadas y desarrollando una receta exquisita para la música tecno y house.\r\n\r\n\r\nSavoretti ha logrado cruzar diferentes puentes durante su rica historia musical, adquiriendo un sentido único de versatilidad. Puede crear atmósferas como pocos pueden hacer, creando un vínculo especial con la pista de baile.', 'jorge-savoretti.jpg');
INSERT INTO `artistas` VALUES ('6', 'Seb Zito', '28', 'Inglaterra', '12', 'Desde que Seb descubrió el underground underground en 94, ha evolucionado a través de muchos elementos de la música underground. Él ha forjado un sonido fuerte de house y techno desde que se estableció como residente en Fuse, sin embargo, los ecos de un sonido más crudo aún impregnan su música con un efecto devastador. Él mismo es un verdadero raver, tiene una afinidad natural con la pista de baile que utiliza de manera inteligente para establecer una conexión y luego llevar a la multitud a lo profundo de su propio sonido y espacio. Sus lanzamientos en Off y Monique este año han tenido una gran reacción, pero se espera que venga aún mejor, ya que Seb traduce su estilo de DJ potente y sin concesiones en producciones musicales del más alto nivel.', 'seb-zito.jpg');
INSERT INTO `artistas` VALUES ('7', 'Martin Butrrich', '42', 'España', '24', 'Martin Buttrich es famoso por ser tan fluido detrás de una mesa de mezclas como frente a un kit de batería virtual.\r\nEsa destreza técnica, combinada con una fascinación por la música de todas las formas, ha dado lugar a lanzamientos sobresalientes en sellos influyentes como Planet E, Four: Twenty, Cocoon, Poker Flat, Nervous y Desolat. También ha puesto su huella digital sonora en muchos artistas importantes, en particular, recibió una nominación al Grammy por un remix de Tori Amos en 2003.\r\n\r\nTales horizontes musicales diversos son raros. Mientras que otros artistas prolíficos pueden haber diluido lentamente su música, la estrella de Buttrich ha aumentado en oposición diametral. Su visión se ha vuelto cada vez más condensada, más y más cristalizada. Para él es muy fácil lanzar y pinchar grooves en un escenario en vivo, y es un público fascinado en festivales como Time Warp y Creamfields, en templos de auge como Fabric (Londres), Womb (Tokyo), Cocoon (Frankfurt), Panorama Bar ( Berlín) y Amnesia (Ibiza) y en las fiestas mundiales Desolat Experience con Loco Dice.', 'martin-buttrich.jpg');
INSERT INTO `artistas` VALUES ('8', 'Guy Geber', '45', 'Israel', '40', 'Guy Gerber es un rara avis dentro de la producción electrónica de baile ya que ha hecho carrera en un sello de house típicamente británico como Bedrock para fichar más adelante por el sello de moda en toda Alemania, Cocoon, el sello y oficina de management del díscolo Sven Váth que le abrió las puertas de la noche ibicenca con sesiones en DC10 o Amnesia tradicional feudo de Väth y los suyos todos las madrugadas de los lunes-. Tal vez el tema que desencadenó todo fue su trallazo Stopagge Time incluido en varios Cd mixes de campanillas como el primer Boogy Bytes mezclado por Kiki para BPitch Control, aunque el no menos popular Transitions (Renaissance) de su padrino John Digweed. Cuando actúa en directo lo acostumbra a hacer acompañado del Ableton Live con el que consigue crear un magma sónico a medio camino entre el house y el sonido más hipnótico que le ha llevado a actuar en festivales como Mutek y nuestro Sónar. Su esplendoroso futuro le tiene preparado varias producciones más para sellos de house progressive a tope como algún trabajo más en el ya comentado sello Bedrock y en SAW del nipón Satoshie Tomiie. Una curiosidad: Guy llegó a jugar con la selección sub -16 de su país natal, Israel.', 'guy-gerber.jpg');
INSERT INTO `artistas` VALUES ('9', 'Martinez Brothers', '35', 'Estados Unidos', '10', 'Steve y Cris Martinez son un dúo de DJs estadounidenses, mejor conocidos como “The Martinez Brothers”.  Nacieron y crecieron en el Bronx, un barrio de Nueva York, y sus primeros pasos en el mundo de la música fueron impulsados por su padre, quién los inscribió en la banda de una iglesia local; a partir de esta experiencia, se familiarizaron con géneros como el soul, el disco y la salsa. Posteriormente, los siguió apoyando comprándoles sus primeros equipos de mezcla para estimular la creatividad de sus hijos y simultáneamente promover su carrera.\r\n\r\nThe Martinez Brothers continuaron produciendo música como independientes. Más tarde, el productor y compositor, Dennis Ferrer, se interesó en su trabajo y les propuso firmar con su sello discográfico Objektivity. A continuación, con ayuda de los contactos de Ferrer, Steve y Cris empezaron a tocar en diferentes clubes neoyorquinos, utilizando géneros como el house, hip hop, deep house y tech house.\r\n\r\n', 'martinez-brothers.jpg');
INSERT INTO `artistas` VALUES ('10', 'Enzo Siraguza', '30', 'Inglaterra', '6', 'Enzo Siragusa es toda una institución en la escena londinense. Después de haber estado durante más de una década, tras los platos de los mejores clubes de la ciudad, este DJ de sonido obsesivo ha creado con éxito su propia marca y de la cuál se han desprendido las fiestas, FUSE y que se han llevado a cabo en el corazón de East London desde 2008. Estas sesiones dominicales han construido una legión de seguidores leales y desarrollado una insignia única de dub-house y techno que los fans han llamado Fusic.\r\n\r\nEnzo es ya un artista altamente cotizado, con fechas internacionales que incluyen ENTER de Richie Hawtin en Space Ibiza, Circo Loco en el DC10  y el emblemático Bar25 en Berlín. Su demanda ha aumentado este último año, lo que le ha hecho pinchar junto a figuras como Cassy o Marco Carola, Loco Dice lo ha convocado a las fiestas Under 300 (Reino Unido), y su estrecha colaboración con tINI, le ha hecho participar regularmente sus ya legendarios maratones b2b.', 'enzo-siragusa.jpg');
INSERT INTO `artistas` VALUES ('11', 'Cape', '25', 'Argentina', '2', 'Cape es oriundo de Rosario, una hermosa ciudad en la provincia de Santa Fe ubicada a orillas del río Paraná. Allí, rodeado de grandes artistas como Franco Cinelli, Nico Purman, Lucas Mari y Jorge Savoretti, comienza su producción, que naturalmente fue influenciada por el trabajo de esos artistas. Como influencias internacionales podemos mencionar nombres como Laurent Garnier, Robert Hood, Basic Channel, Speedy J, Luciano, Mathew Jonson, Baby Ford o el sello seminal Perlon. Así es como Cape crea una interesante y rica mezcla de Techno - Dub House con patrones y armonías de Detroit.\r\n\r\nEn 2011, Cape se asocia con Jorge Savoretti para formar el sello discográfico SAVOR MUSIC. Es un proyecto multicultural, cuyo objetivo es lanzar en escena los \"sabores\" favoritos de un sonido general reproducido a través de una lente latinoamericana.', 'cape.jpg');
INSERT INTO `artistas` VALUES ('12', 'Archie Hamilton', '30', 'Inglaterra', '5', 'Archie Hamilton, el DJ / productor con sede en Londres y tres veces propietario de la etiqueta, se ha establecido como uno de los artistas más buscados de la escena. Uno con su propia identidad y un atractivo sostenido que lo ve pisando terreno familiar en todo el mundo, semana tras semana.\r\n\r\nEn un corto espacio de tiempo, Archie ya ha obtenido elogios de los más altos niveles de house y techno, tanto a través de sus impresiones: Moscow Records, Moss Co. y Arkityp como a través de su propia producción. Con una discografía en constante crecimiento, el sonido de Archie, que asiente al apogeo de la cultura rave en el Reino Unido y al mismo tiempo hacia adelante, ha encontrado su hogar en etiquetas alabadas como Get Physical, Crosstown Rebels, Be Chosen, Pleasure Zone y FUSE.', 'archie-hamilton.jpg');

-- ----------------------------
-- Table structure for artistas_producen_sellos
-- ----------------------------
DROP TABLE IF EXISTS `artistas_producen_sellos`;
CREATE TABLE `artistas_producen_sellos` (
  `id_artistas` int(10) unsigned NOT NULL,
  `id_sellos` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_artistas`,`id_sellos`) USING BTREE,
  KEY `fk_artistas_producen_sellos_sellos` (`id_sellos`) USING BTREE,
  CONSTRAINT `fk_artistas_producen_sellos_artistas` FOREIGN KEY (`id_artistas`) REFERENCES `artistas` (`id_dj`),
  CONSTRAINT `fk_artistas_producen_sellos_sellos` FOREIGN KEY (`id_sellos`) REFERENCES `sellos` (`id_sello`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of artistas_producen_sellos
-- ----------------------------
INSERT INTO `artistas_producen_sellos` VALUES ('1', '2');
INSERT INTO `artistas_producen_sellos` VALUES ('2', '2');
INSERT INTO `artistas_producen_sellos` VALUES ('2', '4');
INSERT INTO `artistas_producen_sellos` VALUES ('3', '1');
INSERT INTO `artistas_producen_sellos` VALUES ('3', '5');
INSERT INTO `artistas_producen_sellos` VALUES ('4', '0');
INSERT INTO `artistas_producen_sellos` VALUES ('4', '1');
INSERT INTO `artistas_producen_sellos` VALUES ('5', '1');
INSERT INTO `artistas_producen_sellos` VALUES ('6', '6');
INSERT INTO `artistas_producen_sellos` VALUES ('8', '3');
INSERT INTO `artistas_producen_sellos` VALUES ('9', '4');
INSERT INTO `artistas_producen_sellos` VALUES ('10', '0');
INSERT INTO `artistas_producen_sellos` VALUES ('10', '9');
INSERT INTO `artistas_producen_sellos` VALUES ('11', '5');
INSERT INTO `artistas_producen_sellos` VALUES ('12', '6');

-- ----------------------------
-- Table structure for generos
-- ----------------------------
DROP TABLE IF EXISTS `generos`;
CREATE TABLE `generos` (
  `id_genero` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`id_genero`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of generos
-- ----------------------------
INSERT INTO `generos` VALUES ('1', 'Tech House');
INSERT INTO `generos` VALUES ('2', 'Techno');
INSERT INTO `generos` VALUES ('3', 'Microhouse');
INSERT INTO `generos` VALUES ('4', 'House');
INSERT INTO `generos` VALUES ('5', 'Progresive');
INSERT INTO `generos` VALUES ('6', 'Downtempo');
INSERT INTO `generos` VALUES ('7', 'Deep House');
INSERT INTO `generos` VALUES ('8', 'Dubstep');
INSERT INTO `generos` VALUES ('9', 'Minimal');
INSERT INTO `generos` VALUES ('10', 'Funk');

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `name_rol` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_rol`) USING BTREE,
  CONSTRAINT `id_rol` FOREIGN KEY (`id_rol`) REFERENCES `usuarios` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', 'Admin');
INSERT INTO `roles` VALUES ('2', 'usuario');

-- ----------------------------
-- Table structure for sellos
-- ----------------------------
DROP TABLE IF EXISTS `sellos`;
CREATE TABLE `sellos` (
  `id_sello` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) NOT NULL,
  `pais_origen` varchar(80) NOT NULL,
  PRIMARY KEY (`id_sello`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of sellos
-- ----------------------------
INSERT INTO `sellos` VALUES ('1', 'Savor Music', 'Argentina');
INSERT INTO `sellos` VALUES ('2', 'Desolat', 'Alemania');
INSERT INTO `sellos` VALUES ('3', 'Rumors', 'Estados Unidos');
INSERT INTO `sellos` VALUES ('4', 'Cuttin Headz', 'Estados Unidos');
INSERT INTO `sellos` VALUES ('5', 'Fun Records', 'Argentina');
INSERT INTO `sellos` VALUES ('6', 'Fuse London', 'Inglaterra');
INSERT INTO `sellos` VALUES ('7', 'Bedrock', 'Inglaterra');
INSERT INTO `sellos` VALUES ('8', 'Drumcode', 'Suecia');
INSERT INTO `sellos` VALUES ('9', 'Yoyaku', 'Inglaterra');
INSERT INTO `sellos` VALUES ('10', 'Cocoon', 'Alemania');

-- ----------------------------
-- Table structure for tracks
-- ----------------------------
DROP TABLE IF EXISTS `tracks`;
CREATE TABLE `tracks` (
  `id_track` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_dj` int(3) unsigned NOT NULL,
  `id_sello` int(3) unsigned NOT NULL,
  `id_genero` int(2) unsigned NOT NULL,
  `titulo` varchar(80) NOT NULL,
  `precio` decimal(4,2) unsigned NOT NULL,
  `lanzamiento` date NOT NULL,
  `duracion` time NOT NULL,
  `bpm` int(3) NOT NULL,
  `imagen` varchar(150) DEFAULT NULL,
  `link` varchar(250) DEFAULT NULL,
  `descripcion` mediumtext,
  PRIMARY KEY (`id_track`) USING BTREE,
  KEY `id_dj` (`id_dj`) USING BTREE,
  KEY `fk_tracks_sellos` (`id_sello`) USING BTREE,
  KEY `fk_tracks_generos` (`id_genero`) USING BTREE,
  CONSTRAINT `fk_tracks_artistas` FOREIGN KEY (`id_dj`) REFERENCES `artistas` (`id_dj`),
  CONSTRAINT `fk_tracks_generos` FOREIGN KEY (`id_genero`) REFERENCES `generos` (`id_genero`),
  CONSTRAINT `fk_tracks_sellos` FOREIGN KEY (`id_sello`) REFERENCES `sellos` (`id_sello`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of tracks
-- ----------------------------
INSERT INTO `tracks` VALUES ('1', '1', '2', '1', 'Definition', '99.99', '2014-07-17', '00:07:25', '122', 'jpg', 'm4a', 'Loco Dice de Desolat se une a la lista de la etiqueta Headz de Martinez Brothers Cuttin este abril con\r\n‘Definition\', respaldada con un remix del veterano DJ de Detroit Techno DJ T-1000.\r\nLoco Dice de Düsseldorf ha sido durante mucho tiempo una de las figuras más respetadas en la música electrónica contemporánea con lanzamientos a lo largo de los años en sellos líderes como Cocoon, Cadenza, Ovum y, por supuesto, su propio Desolat, así como un pesado calendario de giras que lo llevó por todo el mundo en todo el año. año fuera. Aquí, sin embargo, vemos a Dice ofreciendo su nuevo single por cortesía de Cuttin ’Headz, una plataforma que los Martinez Brothers y sus asociados ofrecen House y Techno de alto octanaje, centrados en la pista de baile.\r\n\r\nLa mezcla original de la pista del título \"Definition\" lleva con latón en espiral como tonos graves, lamer flauta, agitadores mezclados y ganchos de sintetizador resonantes que se ejecutan junto a una línea de bajo con baches y una fusión de líneas vocales procesadas y embriagadoras.');
INSERT INTO `tracks` VALUES ('2', '1', '2', '2', 'Mad Luv', '55.00', '2018-02-14', '00:05:17', '124', 'jpg', 'mp3', 'Loco Dice ha presentado su álbum ecléctico oscuro \'Love Letters\', una encarnación de 15 pistas de su gama de producción diversa. Con el último sencillo \'Estamos vivos\', el disco más esperado de sus últimos sets. El tercer álbum de estudio de Dice después de \'7 Dunham Place\' y \'Underground Sound Suicide\' lo ve reflexionando sobre sus influencias musicales y sus conexiones con Dusseldorf y más allá. El álbum está repleto de los tonos típicamente contundentes del productor, que difuminan las líneas entre house y techno. Utillizing los sonidos erizados y suaves ritmos de batería, el álbum \"Love Letters\" de Dice sirve como una encarnación sonora de los tonos que hacen que su sonido sea tan único.');
INSERT INTO `tracks` VALUES ('3', '2', '4', '4', 'Red Eyes', '80.00', '2019-01-05', '00:06:45', '128', 'jpg', 'm4a', 'El artista catalán Guti está de nuevo entregando un quemador de casa efectivo dirigido a la pista de baile. Titulado \'Red Eye\', el nuevo corte es la segunda pieza de material que sale a la superficie de su próximo álbum debut \"The Year Of The Conga\", que también es el primer álbum de artista que se lanzará en la marca Headz de The Martinez Brothers \"Cuttin\". El nuevo material ve a Guti volver a sus raíces, fusionando elementos de percusión en bruto para ofrecer ritmos hipnóticos. ¡Esto es Guti en plena forma!');
INSERT INTO `tracks` VALUES ('4', '2', '2', '1', 'Patio de Juegos', '99.99', '2013-05-22', '00:04:20', '120', 'jpg', 'mp3', 'Patio de Juegos, que se traduce como Playground, es un maravilloso viaje de varios géneros a través de la mente de un artista que está en la cima de su juego y en ascenso hacia las estrellas. Las ataduras de su herencia sudamericana siempre presente infunden con estructuras de casa increíblemente intrincadas y perfectamente simples que le dan al álbum todo su espíritu casi infantil que rara vez se encuentra en la música electrónica. Los éxitos futuros del club como Wanna Be, con su guiño al linaje histórico optimista de la música house, y All the Girls, con su ritmo vibrante, bucles de piano y voces eróticas se sientan sin esfuerzo junto a pistas más experimentales e inspiradas en el jazz, como el exploratorio Still aquí. Otro buen ejemplo es Sun, con su línea de graves profundos salpicada de sintetizadores bañados por el sol y sombreros de verano que exportan a los oyentes a una cálida utopía. Guti produce una serie de pistas con artistas de alto perfil tanto dentro como fuera de la fraternidad de DJ, un signo de su creciente popularidad dentro de la electrónica, y también de su habilidad innata para colaborar con más artistas convencionales. Esto ha resultado en que Guti empuje sus producciones en direcciones nuevas y emocionantes. Guy Gerber aparece en We Shall Overcome, con sus sintetizadores en aumento complementados por un ritmo grueso que asegurará que se presente en muchos sets en los próximos meses. Visionquests Ryan Crosson echa una mano en No Promises que ha resultado en un verdadero ritmo de pista de baile. Y My Whole Thing presenta a Anthea Marie Nzekwu, cuyas voces inspiradoras acompañan un ritmo relajado de ensueño. Graduada del Colegio de Música de Berklee, y amiga de Gutis desde hace mucho tiempo, Grünbox presenta en Miraloo un ejemplo de la habilidad de Gutis para colaborar con la élite musical del mundo. y quizás el mayor golpe, es el de Daniel Melingo, que aparece en Lucio El Anarquista. El cantante de tango nominado al Grammy y músico de renombre mundial es conocido por su trabajo de composición en las películas de Pedro Almodóvars, y aporta una rica educación musical a una pista verdaderamente sublime. En general, Guti abandona una hermosa mezcla de pistas que unen el espacio entre el club y la sala de estar con total facilidad. Un primer álbum impresionante, que claramente delimita la habilidad y la ambición de los artistas en vivo para los próximos años.');
INSERT INTO `tracks` VALUES ('6', '3', '5', '3', 'Turn on the Fun', '80.00', '2018-05-12', '00:06:36', '126', 'jpg', 'm4a', 'Ya sabéis cómo va la cosa: cuando el artista se lo pasa bien y actúa con honestidad, raro sería que nosotros, que estamos al otro lado de la pista o expectantes con los auriculares puestos, no hiciésemos lo mismo. Si las emociones se contagian pero nos gustan más las positivas, imaginaos el efecto balsámico que desprende Fun Records. Tratad de imaginar las ganas, la dedicación y el tacto que sus fundadores, Mauricio Barembuem (Barem) y Alexis Cabrera, le han dedicado al proyecto desde que juntos encontraron ese momento, el que te dicta que ha llegado la hora de desprenderte de algunas pesadas cargas y de ritmos ajenos y apostar por tus ideas y por un sonido definitorio y que de sentido a tu creatividad. Ahora sí, nunca mejor dicho, Turn On The Fun.');
INSERT INTO `tracks` VALUES ('7', '3', '1', '1', 'Mint', '55.00', '2012-03-14', '00:05:55', '128', 'jpg', 'm4a', 'El reconocido dj y productor argentino Barem se ha juntado con su amigo Alexis Cabrera para crear un nuevo sello llamado FUN Records. \r\n\r\nLa pareja no es ajena al terreno editorial ya que ambos llevan ya un tiempo publicando música. El primero en la plataforma de Richie Hawtin y el segundo en sellos como Mindshake (de Paco Osuna), Raum Musik o Time Has Changed. Barem ha decicido dar un paso adelante en su carrera y dejar atrás su estilo minimalista para centrarse junto a Alex Cabrera en producciones con más grooveras.  \r\n');
INSERT INTO `tracks` VALUES ('8', '4', '5', '3', 'Mivi', '80.00', '2018-04-05', '00:06:37', '126', 'jpg', 'm4a', 'Alexis Cabrera es adicto a la música, a la fiesta y, como diríamos por estos lares spanish rude style, es adicto a petarlo. Pero, como hemos ido contando, no busques grandes subidones ni sonidos melódicos armoniosos en sus trabajos, busca algo mucho más pegajoso, corporal, orgánico, picante,  y quizás aciertes más. Déjate perder por una excursión urbana y sorpréndete con tal o cual graffiti que no esperabas, o déjate perder por un camino montañoso y, cuando menos te lo esperes, encontrarás ese riachuelo con agua transparente que te pide un chapuzón hasta la siguiente catarata. Eso es Alexis Cabrera, el toque de espontaneidad que hace de algo que ya conoces una variante nueva y atractiva, sin tampoco reinventar o poner del revés aquello que te gusta. Alexis Cabrera también es adicto a los live, ¿acaso hay algo más espontáneo y creativo que eso? El primer track de Mivi, Alcohpott, te embiste desde el minuto cero con un sampler en loop que te dejará así. Sin euforia, sin darte mal rollo, prepárate por sus baterías analógicas y redobles de tambores. Quizás, si te pilla en frío, pensarás que 11 minutos de track son excesivos, pero a la tercera o cuarta vez que lo hayas escuchado su final en seco te sentará como un jarro de agua fría: we want more fun!');
INSERT INTO `tracks` VALUES ('9', '4', '1', '3', 'Confites', '80.00', '2017-03-14', '00:08:24', '122', 'jpg', 'm4a', 'Alexis Cabrera es adicto a la música, a la fiesta y, como diríamos por estos lares spanish rude style, es adicto a petarlo. Pero, como hemos ido contando, no busques grandes subidones ni sonidos melódicos armoniosos en sus trabajos, busca algo mucho más pegajoso, corporal, orgánico, picante,  y quizás aciertes más. Déjate perder por una excursión urbana y sorpréndete con tal o cual graffiti que no esperabas, o déjate perder por un camino montañoso y, cuando menos te lo esperes, encontrarás ese riachuelo con agua transparente que te pide un chapuzón hasta la siguiente catarata. Eso es Alexis Cabrera, el toque de espontaneidad que hace de algo que ya conoces una variante nueva y atractiva, sin tampoco reinventar o poner del revés aquello que te gusta. Alexis Cabrera también es adicto a los live, ¿acaso hay algo más espontáneo y creativo que eso? El primer track de Mivi, Alcohpott, te embiste desde el minuto cero con un sampler en loop que te dejará así. Sin euforia, sin darte mal rollo, prepárate por sus baterías analógicas y redobles de tambores. Quizás, si te pilla en frío, pensarás que 11 minutos de track son excesivos, pero a la tercera o cuarta vez que lo hayas escuchado su final en seco te sentará como un jarro de agua fría: we want more fun!\r\n\r\n');
INSERT INTO `tracks` VALUES ('10', '5', '1', '3', 'River Plate', '70.00', '2017-12-31', '00:12:09', '124', 'jpg', 'm4a', 'Jorge Savoretti lanzórá su EP \'River Plate\' a través de la edición especial de Visionquest, que comprende tres composiciones originales del artista argentino.\r\nDespués de haber estado involucrado en la música electrónica como DJ durante más de dos décadas, Jorge Savoretti está firmemente consolidado como una de las mejores exportaciones de música electrónica de la Argentina, comenzando desde sus humildes comienzos en Rosario, ha lanzado material con Esperanza, Claque Musique e iglú. -rec, así como recorrer todo el mundo.\r\nAquí vemos a Jorge marcar su debut para la impresión Visionquest Special Edition con un nuevo tres tracker y tomar la delantera es la canción principal \'River Plate\', que muestra radiantemente el estilo led percusivo infundido con dub de Savoretti con tambores oscilantes agitados, la almohadilla etérea hincha una serpiente. sub surco y acordes de doblaje que bajan y fluyen por todas partes.\r\nLo siguiente es \'Parana High\', que adopta un enfoque más refinado y de baja altura a través de aleteos de acordes suaves, secuencias de puñaladas brillantes y sub golpes accidentados, mientras que un impulso de percusión arrastrado alimenta aún más el ritmo. El último en completar el paquete es \'U-Fonk\', que se adentra en territorios más oscuros con sintetizadores glitch alucinantes, ritmos robustos y una voz de bajo vacilante que se ejecuta a lo largo de sus seis minutos de duración.');
INSERT INTO `tracks` VALUES ('11', '1', '1', '2', 'Raws', '10.00', '2019-02-06', '00:07:21', '128', 'jpg', 'mp3', 'Seb Zito es uno de los pilares esenciales del equipo de FUSE London y sus producciones siempre tienen mucha actitud. Inspirándose en los mejores discos de los 90, regresa al sello con EP \'RAWS\', un rastreador de dos sin sentido. La pista del título es nítida, comenzando con una patada sólida y unas almohadillas salteadas antes de serpentear a través del ritmo al medio tiempo. The One se dirige por un camino más profundo, pero aún rinde homenaje al clásico delirio con una línea de bajo propulsiva y baja, y pads vertiginosos y vertiginosos que vuelven a emerger después de una ruptura con una serie de aplausos. ¡Otro gran lanzamiento de este gran talento!');
INSERT INTO `tracks` VALUES ('12', '7', '2', '2', 'Roads', '80.00', '2010-03-24', '00:06:36', '124', 'jpg', 'm4a', 'Desolat trae la diversión con un nuevo EP enorme del brillante Martin Buttrich. El español es uno de los DJ más grandes del house y el techno. Toca para multitudes gigantes en todos los clubes y festivales más importantes del mundo, ha sido anfitrión en Radio1, dirige sus propios sellos discográficos EI8HT & Edible, celebró una residencia en Watergate recientemente, así como una residencia actual en Resistance en Ibiza simplemente, consolidando cómo no pudo \' Ser más influyente en la arena de la sala principal.\r\n`` Estaba literalmente jodiendo cuando me topé con todos los ruidos locos que están en \'Roads\' \', explica Buttrich, quien supo de inmediato que era una canción que encajaría en la etiqueta de Loco Dice. `` Es realmente agradable cuando haces algo en lo que está realmente una etiqueta que respetas, porque luego te da un impulso creativo para crear más. No hago pistas para ninguna etiqueta específicamente, solo hago música y cómo resulta es cómo resulta \'\'.');
INSERT INTO `tracks` VALUES ('13', '8', '3', '5', 'What to Do', '80.00', '2018-09-12', '00:05:05', '122', 'jpg', 'm4a', 'Productor conocido por sus sonidos eclécticos y melódicos, Guy Gerber ha entregado el nuevo paquete de remezclas de su propia producción \"What To Do\", que se lanzará el viernes 26 de octubre.\r\n\r\nAl incorporar una gama variada de arreglos sonoros con los que el DJ israelí se ha convertido en sinónimo, el original fue lanzado a principios de este año y muestra varios aplausos de platillos y una amplia gama de instrumentos de percusión aislados. Con & ME girando su propio trabajo dinámico de la pista, el alemán, que ha realizado una serie de sets en Ibiza este verano, jugando en \'Circoloco\' de DC-10, agrega elementos a la mezcla alimentados por el ritmo, un marcado contraste con El estilo profundo y de conducción preferido por DJ Jes. Un gran paquete de remezcla de la querida versión original de \"Qué hacer\"');
INSERT INTO `tracks` VALUES ('14', '9', '4', '1', 'Stuff in the Trunk', '75.00', '2017-07-20', '00:07:22', '128', 'jpg', 'm4a', 'Los Martinez Brothers tienen una nueva pantalla de 12 pulgadas llamada Stuff In The Trunk.\r\n\r\nEl lanzamiento presenta una versión original e instrumental de la canción principal, con la cantante / DJ electrónica francesa Caroline Hervé, también conocida como Miss Kittin, colaborando en la voz. Está previsto que salga el 13 de mayo, aunque los fanáticos de los hermanos de Nueva York pueden haberlos escuchado abandonar la canción durante los últimos sets en el Festival Caprices de Suiza y la tela en Londres. Stuff In The Trunk será la cuarta salida en su sello Cuttin \'Headz, luego de un EP reciente de remixes de Basement Jaxx y un tracker de Destination Void de tres canciones.');
INSERT INTO `tracks` VALUES ('16', '9', '4', '3', 'Three Town', '25.00', '2012-09-12', '00:04:24', '122', 'jpg', 'm4a', 'El primer lanzamiento de Cuttin \'Headz, producido por los hermanos, es una casa rodante de tres pistas de baile que huele a cálidas noches en DC-10.');
INSERT INTO `tracks` VALUES ('17', '10', '6', '2', 'Playdem', '55.00', '2015-03-04', '00:06:25', '124', 'jpg', 'm4a', 'El director del sello, Enzo Siragusa, se asocia con Archie Hamilton y Subb-an para el \"EP Archenzubann\". \"Playdem\" es una ranura de rodadura bellamente apretada; una puñalada de piano y un fragmento de voz extravagante se suman al ambiente hipotónico de la cabeza hacia abajo mientras que el VINILO SÓLO la pista \'Shimmering\' inyecta el ritmo con percusión afilada y trabajo de sintetizador brumoso agregando una flava sutilmente edificante \'.');
INSERT INTO `tracks` VALUES ('18', '10', '9', '1', 'Ricochet', '70.00', '2018-05-04', '00:07:05', '122', 'jpg', 'm4a', 'El jefe de la disquera de Moscú, Archie Hamilton, se une con el jefe de la disquera de FUSE, Enzo Siragusa, para presentar su EP \"Dubinnovation\" de tres pistas, que presenta la balada doblada \"Ricochet\".\r\n\r\nLa impronta de Archie en Moscú ha estado en el juego durante casi una década, con una producción que se inclina más hacia la calidad que a la cantidad. Con el lanzamiento número 20 de la etiqueta, ha tocado a su buen amigo Enzo para mostrar un estilo de casa crudo y basado en el ritmo que ha sido la tarjeta de presentación para ambos artistas a lo largo de sus carreras.');
INSERT INTO `tracks` VALUES ('19', '11', '1', '3', 'Hermone', '65.00', '2019-01-01', '00:06:25', '126', 'jpg', 'm4a', 'Cape proviene de Rosario, una hermosa ciudad en la provincia de Santa Fe ubicada a orillas del río Paraná. Allí, rodeado de grandes artistas como Franco Cinelli, Nico Purman, Lucas Mari y Jorge Savoretti, comienza su producción, que naturalmente fue influenciada por el trabajo de esos artistas. Como influencias internacionales podemos mencionar nombres como Laurent Garnier, Robert Hood, Basic Channel, Speedy J, Luciano, Mathew Jonson, Baby Ford o el sello seminal Perlon. Así es como Cape crea una mezcla interesante y rica de Techno - Dub House con patrones y armonías de Detroit.\r\n\r\nEn 2011, Cape se asocia con Jorge Savoretti para formar el sello discográfico SAVOR MUSIC. Es un proyecto multicultural, cuyo objetivo es lanzar en escena los \"sabores\" favoritos de un sonido general reproducido a través de un lente latinoamericano. Sorprendiendonos así con su último lanzamiento llamado \"Hermone\"');
INSERT INTO `tracks` VALUES ('20', '12', '6', '7', 'The message', '92.00', '2017-10-22', '00:07:22', '120', 'jpg', 'm4a', 'BE CHOSEN da la bienvenida a Archie Hamilton a la familia!\r\n\r\nHa lanzado en sellos underground muy respetados como Fear of Flying, Tzinah, Moral Fiber Pleasure Zone y, por supuesto, sus propias huellas, Moscow Records y Moss Co. A lo largo del camino, ha obtenido un fuerte apoyo de personas como Marco Carola, tINI y Robert Dietz entre muchos otros.');

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id_usuario` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `id_rol` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('1', 'usuario_1@test.com', '$2y$10$ZZWGCJbp4FRMaw4OC8bCtOYaX6kfAShUrm7PeQyWQWkMzPwAMaZr6', 'usuario', 'usuario', '1');
INSERT INTO `usuarios` VALUES ('2', 'usuario_2@test.com', '$2y$10$1urySoC5/A408FzEOO167.e1I0fEhi3u.JaX6NTEGHu9RAVUYeCtO', 'usuario', 'usuario', '0');
