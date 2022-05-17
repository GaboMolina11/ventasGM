create
database venta_informatica;
use
venta_informatica;
create table categorias
(
    id              int auto_increment primary key,
    nombreCategoria varchar(255)
);
create table marcas
(
    id          int auto_increment primary key,
    nombreMarca varchar(255)
);


create table articulos
(
    id                int auto_increment primary key,
    nombreProducto    varchar(255),
    precio            varchar(255),
    imagenCatalogo    varchar(255),
    imagenDescripcion varchar(255),
    descripcion       longtext,
    categoria_id         int NOT NULL,
    nombreMarca_id       INT NOT NULL
    
);

alter table articulos add foreign key (nombreMarca_id) references marcas (id);
alter table articulos add foreign key (Categoria_id) references categorias (id);

alter table articulos add  nuevo boolean;
alter table articulos add  stock boolean;

INSERT INTO `categorias` (`id`, `nombreCategoria`) VALUES
	(1, 'Fuentes'),
	(2, 'Sillas'),
	(3, 'Tarjetas de video'),
	(4, 'Teclados'),
	(5, 'Camaras Web'),
	(6, 'Vinchas/Auriculares'),
	(7, 'Parlantes'),
	(8, 'Volantes/Pedaleras');
    
    
    
    INSERT INTO `marcas` (`id`, `nombreMarca`) VALUES
	(1, 'Logitech'),
	(2, 'Thermaltake'),
	(3, 'Seasonic'),
	(4, 'Gainward'),
	(5, 'Arctic'),
	(6, 'Sharkoon');

    INSERT INTO `articulos` (`id`, `nombreProducto`, `precio`, `imagenCatalogo`, `imagenDescripcion`, `descripcion`, `categoria_id`, `nombreMarca_id`) VALUES
	(2, 'LOGITECH G TECLADO G915 LIGHTSPEED', '320', '../images/BFXLOT11.jpg', '../imagenesDescripcion/BFXLOT11.jpg', 'ESPECIFICACIONES FÍSICAS\r\nLongitud: 475 mm\r\nAnchura: 150 mm\r\nAltura: 22 mm\r\nPeso (sin cable): 1025 g\r\nLongitud de cable de PC: 1,8 m\r\n \r\nESPECIFICACIONES TÉCNICAS\r\nInterruptores GL de perfil bajo:\r\nDistancia real: 1,5 mm\r\nFuerza de actuación: 50 g\r\nRecorrido total: 2,7 mm\r\n \r\nDuración de las baterías:\r\n30 horas (brillo 100%)\r\n \r\nMemoria integrada:\r\nDos perfiles de iluminación\r\nTres perfiles de macros de teclas G\r\n \r\nOtras características:\r\nTecnología inalámbrica LIGHTSPEED\r\nBluetooth\r\nRGB LIGHTSYNC, iluminación por tecla\r\nCinco teclas G específicas\r\nControl multimedia específico y rueda de volumen sin bordes\r\n \r\nREQUISITOS\r\nLIGHTSPEED: Puerto USB y Windows® 7 o posteriores, macOS® X 10.11 o posteriores\r\nBluetooth: Dispositivo Bluetooth compatible con Windows 8 o posteriores, macOS X 10.11 o posteriores, Chrome OS™, Android™ 4.3 o posteriores, iOS 10 o posteriores\r\n(Opcional) Acceso a Internet para descargar el software Logitech G HUB4Las funciones avanzadas requieren el software para juegos Logitech G HUB, disponible para descargar en logitechg.com/GHUB\r\n \r\nNÚMERO DE REFERENCIA\r\n920-008902', 4, 1),
	(3, 'LOGITECH G VINCHA G433 7.1 BLACK', '111', '../images/BFXLO433N.jpg', '../imagenesDescripcion/asdwqwe12313.jpg', ' ESPECIFICACIONES FÃSICAS Longitud: 172 mm Anchura: 81,7 mm Altura: 182 mm Peso (sin cable): 259 g DAC USB: 160 mm Longitud de cable: 2 m Longitud de cable mÃ³vil: 1,5 m   AURICULAR Transductor: 40 mm Respuesta de frecuencia: 20 Hz â€“ 20 kHz Impedancia: 32 ohmios Sensibilidad: 107 dB a 1 kHz SPL 30 mW/1 cm Longitud de cable: 2 m   MICRÃ“FONO PatrÃ³n de captaciÃ³n de micrÃ³fono: Cardioide (unidireccional) Tipo: Condensador de electreto posterior TamaÃ±o: 4 mm Respuesta de frecuencia: 100 Hz â€“ 10 kHz   REQUISITOS Puerto USB para PC o puerto de audio de 3,5 mm para consolas/dispositivos mÃ³viles WindowsÂ® 7 o posteriores, MacOS 10.10 o posteriores, Nintendo Switch, PS4, Xbox One, tablets y mÃ³viles (Opcional) Acceso a Internet para instalar Logitech Gaming Software y 7.1 DTS Headphone:X3Sonido 7.1 envolvente virtual sÃ³lo en PC y requiere el uso de tecnologÃ­a DAC USB. EstÃ©reo en consolas, smartphones y tablets con salida analÃ³gica de 3,5 mm. Algunos dispositivos de juego requieren un adaptador para la entrada de cable de audio.   TABLA DE COMPATIBILIDADES PC, PC VR ï½œ 7.1 envolvente4Sonido 7.1 envolvente virtual sÃ³lo en PC y requiere el uso de tecnologÃ­a USB inalÃ¡mbrica. EstÃ©reo en consolas, smartphones y tablets con salida analÃ³gica de 3,5 mm. Algunos dispositivos de juego requieren un adaptador para la entrada de cable de audio. vÃ­a USB, EstÃ©reo vÃ­a 3,5 mm PS4 ï½œEstÃ©reo vÃ­a 3,5 mm XboxÂ® One ï½œEstÃ©reo vÃ­a 3,5 mm NintendoÂ® Switchâ„¢ ï½œEstÃ©reo vÃ­a 3,5 mm AppleÂ® ï½œ EstÃ©reo vÃ­a 3,5 mm MÃ³vil | EstÃ©reo vÃ­a 3,5 mm  ', 6, 1),
	(4, 'LOGITECH G VINCHA G435 BLACK ', '120', '../images/2.jpg', '../imagenesDescripcion/logitech-g435-black-1.jpg', ' Model Brand	Logitech Model	981-001049 Details Compatibility	Android / PlayStation 4 / PlayStation 5 / Windows Color	Black Operating Time	18 hour battery life Connectivity Connection Type	Wireless Connector	USB Wireless Type	LIGHTSPEED / Bluetooth Headphone Driver Unit 	40mm Ear Coupling 	Circumaural Package Contents Package Contents	G435 Headset LIGHTSPEED wireless USB-A receiver USB-C to USB-A charging cable User documentation', 6, 1),
	(5, 'LOGITECH G VINCHA G435 BLUE', '120', '../images/BFXLG4.jpg', '../imagenesDescripcion/BFXLG4.jpg', ' Model Brand	Logitech Model	981-001061 Details Compatibility	Android / PlayStation 4 / PlayStation 5 / Windows Color	Blue Operating Time	18 hour battery life Connectivity Connection Type	Wireless Connector	USB Wireless Type	LIGHTSPEED / Bluetooth Headphone Driver Unit 	40mm Ear Coupling 	Circumaural Package Contents Package Contents	G435 Headset LIGHTSPEED wireless USB-A receiver USB-C to USB-A charging cable User documentation', 6, 1),
	(6, 'LOGITECH G VINCHA G435 WHITE ', '120', '../images/BFXLG4W.jpg', '../imagenesDescripcion/BFXLG4W.jpg', ' Model Brand	Logitech Model	981-001073 Details Color	White Wireless Wireless Type	LIGHTSPEED / Bluetooth Operating Time	18 hour battery life Headphone Driver Unit 	40mm Ear Coupling 	Circumaural Package Contents Package Contents	G435 Headset LIGHTSPEED wireless USB-A receiver USB-C to USB-A charging cable User documentation', 6, 1),
	(7, 'LOGITECH G VINCHA G635 7.1 ', '144', '../images/BFX635.jpg', '../imagenesDescripcion/auriculares-con-microfono-logitech-g635-gaming.jpg', ' Model Brand	Logitech Model	G635 Part Number	981-000748 Details Color	Black Connectivity Connection Type	Wired Connector	3.5mm/ USB Cord Length	9.19 ft. (PC Cable) 4.92 ft. (Mobile Cable) Headphone Driver Unit 	50mm Headphone Frequency Response 	20Hz-20KHz Headphone Input Impedance 	39 Ohms (passive) Headphone Sensitivity 	93 dB SPL/mW Ear Coupling 	Circumaural Weight	0.76 lb. Without Cable Microphone Microphone Frequency Response 	100Hz-10KHz Features System Requirements	Windows 10, Windows 8.1, Windows 7, Mac, Nintendo Switch, PlayStation 4, Xbox One, tablet, or mobile device USB 2.0 port for PCs or 3.5 mm audio port for console or mobile devices DTS Headphone:X 2.0 enabled on PC via USB connection and Logitech G HUB software Optional G HUB software requires Internet access for software installation and runs on 64-bit WindowsÂ® 7, Windows 8, Windows 10 or late Features	Large 50mm Pro-G Drivers Enhanced woven hybrid mesh material produces deeper bass and our widest, smoothest sound ever.  LIGHTSYNC RGB Customize lighting from approx. 16.8 million colors, create lighting effects or synchronize lighting with in-game actions.  DTS Headphone:X 2.0 Detect enemies from all sides with 7.1 surround positional audio and a 3D soundscape.*  6mm Mic+ Large mic for amazingly clear voice comms plus fiip-to-mute convenience.  Three G-keys Programmable for fast in-game actions at your fingertips.  * DTS Headphone:X 2.0 requires Logitech G HUB Software. Package Contents Package Contents	G635 Headset Micro-USB cable 3.5mm audio cable User documentation', 6, 1),
	(8, 'LOGITECH G VINCHA G935 InalÃ¡mbrica', '199', '../images/BFXLO935.jpg', '../imagenesDescripcion/BFXLO935.jpg', ' Model Brand	Logitech Model	G935 WIRELESS Part Number	981-000742 Details Color	Black Operating Time	No lighting: 12 hours Default lighting: 8 hours Connectivity Connection Type	Wired / Wireless Connector	USB Wireless Type	RF Headphone Driver Unit 	50mm Headphone Frequency Response 	20Hz-20KHz Headphone Input Impedance 	39 Ohms (passive), 5k Ohms (active) Headphone Sensitivity 	93 +/-3 dB Noise Cancelling	Passive Ear Coupling 	Circumaural Weight	(no cables or USB receiver): 13.40 oz. Microphone Microphone Frequency Response 	100Hz-10KHz Features System Requirements	Windows 10, Windows 8.1, Windows 7, Mac, Nintendo Switch, PlayStation 4, Xbox One, tablet, or mobile device USB 2.0 port or higher for PCs, Mac, Nintendo Switch, PlayStation 4; 3.5 mm audio port for console or mobile devices DTS Headphone:X 2.0 enabled on PC via USB connection and Logitech G HUB software Optional G HUB software requires Internet access for software installation and runs on 64-bit Windows 7, Windows 8, Windows 10 or later, or the most recent version of macOS X Features	2.4 GHz WIRELESS G935 gives you the best of both worlds with the option to game wirelessly or wired. Play on 2.4 GHz wireless for up to 12 hours per charge without lighting or 8 hours with default lighting. Battery life may vary based on user and computing conditions. 12 hours battery life is based on no LED lighting and headset volume set to 50%.. Keep playing while charging the battery via USB cable. Alternatively, the 3.5 mm analog input gives you the freedom to play wired - on console, mobile or PC - without needing battery power.  PLAY ADVANCED Upgraded Pro-G 50 mm drivers are constructed with a woven hybrid mesh that unlocks greater sonic detail, depth, and clarity at any volume. Now, with the increased diameter, Pro-G performs better than ever. Low frequency sounds - like booming explosions and rich soundtracks - are even more full and cinematic. High frequencies - voices, footsteps, shots fired - are incredibly clean and precisely recreated.  Surround Beyond 7.1 Experience incredible DTS Headphone:X 2.0 DTS Headphone:X 2.0 surround sound and EQ presets are only available for Windows OS and requires Logitech G HUB gaming software. that performs with greater precision than standard 7.1 channel surround sound. Accurate in-game spatial awareness allows you to clearly detect position and distance in a complete 3D soundscape. Hearing your surroundings clearly can be the difference between victory and defeat.  Fully Customizable With Logitech G HUB gaming software you can personalize LIGHTSYNC RGB lighting, program G-keys with macros and in-game commands, and customize audio preferences with unique profiles for each game and app.  BE HEARD LOUD AND CLEAR Mic+ 6 mm is a boom mic enhanced for amazingly clear and precise communications. The boom has an indicator LED so you know when your mic is muted. When not in use, the boom mic can be folded back into the headphones making it nearly invisible. Package Contents Package Contents	G935 Headset USB wireless receiver Micro-USB charging cable 3.5 mm audio cable', 6, 1),
	(9, 'LOGITECH G PARLANTES G560 Bluetooth', '285', '../images/BFXLO560.jpg', '../imagenesDescripcion/BFXLO560.jpg', ' Model Brand	Logitech Model	G560 Part Number	980-001310 Details Type	Wired with Bluetooth Wireless Color	Black Configuration	2.1 Total Power	Peak: 240 Watts RMS: 120 Watts Satellite RMS Power /ea	2 x 30 Watts Subwoofer RMS Power	60 Watts Dimensions & Weight Dimension	Satellite: 4.60" x 5.80" x 6.50" Subwoofer: 15.90" x 10.00" x 8.10" Weight	Satellite: 3.92 lbs. (each) Subwoofer: 12.10 lbs. Features Features	Lightsync - RGB Lighting That Reacts to Games  Bring Games to Light - Custom RGB Experience for Popular Titles  Game Beyond the Monitor - Customizable Screen Sampler Extends Color  Audio Visualizer - Full spectrum lighting driven by music  240 Watts Powerful Sound - All-consuming sound from every angle  DTS:X Ultra Surrounf Sound - Next-gen Positional Audio  One Speaker for All Your Audio - USB, 3.5mm, and Bluetooth compatible  Logitech Gaming Software - Game Integration and Custom Lighting Effects  Designed to Break Boundaries - The First RGB Speaker of Its Kind Package Contents Package Contents	Two satellite speakers One subwoofer with power cable USB cable User documentation', 7, 1),
	(10, 'LOGITECH VINCHA G733 WHITE  InalÃ¡mbrica', '205', '../images/BFXLOV24.jpg', '../imagenesDescripcion/BFXLOV24.jpg', ' Model Brand	Logitech Model	G733 Part Number	981-000882 Details Compatibility	PC with Windows 7 or later, macOS X 10.12 or later, or PlayStation 4 gaming console (Optional) Internet access for Logitech G HUB Software Color	White LED	RGB Operating Time	No lighting: 29 hours Default lighting: 20 hours Connectivity Connection Type	Wireless Connector	USB 2.0 Type A Wireless Type	2.4 GHZ LIGHTSPEED Wireless Range	Up to 20 meters Headphone Driver Unit 	PRO-G 40 mm Headphone Frequency Response 	20Hz-20KHz Headphone Input Impedance 	39 Ohms (passive) Headphone Sensitivity 	87.5 dB SPL/mW Ear Coupling 	Circumaural Weight	0.61 lb. Microphone Microphone Frequency Response 	100Hz-10KHz Features System Requirements	PC with Windows 7 or later, macOS X 10.12 or later, and USB port, or PlayStation 4 gaming console (Optional) Internet access for Logitech G HUB Software Features	Long-Lasting Comfort Lightweight (278g) with unique reversible and adjustable suspension headband and dual-layer memory foam earpads.  Advanced Audio Pro-G drivers and DTS Headphone: X2.0 surround create an immersive sound experience.  Vibrant Colors Express yourself with a diverse choice of bold colors. Accessories available separately.  LIGHTSPEED Wireless Pro-grade wireless with up to 29 hours of battery life and 20m range.  Front-Facing LIGHTSYNC RGB Lighting Customize dual-zone RGB lighting and effects from approx. 16.8 million colors.  Blue VO!CE Mic Technology Tune the detachable mic for ultra-clear voice comms with advanced noise reduction, compression, de-esser and more. Package Contents Package Contents	G733 LIGHTSPEED Wireless RGB Gaming Headset Reversible soft headband (attached) Detachable microphone LIGHTSPEED wireless receiver (USB-A) USB-C to USB-A charging cable', 6, 1),
	(11, 'LOGITECH VINCHA G733 LOL K/DA  InalÃ¡mbrica', '235', '../images/1624981081_h2775050fb3c640518b59ab8c95802821b.jpg', '../imagenesDescripcion/BFXLOV67.jpg', ' Model Brand	Logitech Series	G733 K/DA Model	981-000989  Especificaciones 		 Fisicas	 Longitud: 194 mm  Anchura: 190 mm  Altura: 195 mm  Peso: 278 g  Profundidad: 83 mm    Espcificaiones  TÃ©cnicas	 AudÃ­fono:  Transductor: PRO-G 40 mm  Respuesta de frecuencia: 20 Hz-20 kHz  Impedancia: 39 ohmios (pasiva), 5 kilohmios (activa)  Sensibilidad: 87,5 dB SPL/mW  MicrÃ³fono (varilla):  PatrÃ³n de captaciÃ³n de micrÃ³fono: Cardioide (unidireccional)  TamaÃ±o: 6 mm  Respuesta de frecuencia: 100 Hz - 10 kHz  Radio de acciÃ³n inalÃ¡mbrico10Depende del uso y de los dispositivos.  La duraciÃ³n de la baterÃ­a se basa en un volumen de audÃ­fonos configurado en 50%.: Hasta 20 metros  Tipo de conexiÃ³n: TecnologÃ­a inalÃ¡mbrica LIGHTSPEED a travÃ©s de USB  DuraciÃ³n de baterÃ­a (recargable)11Depende del uso y de los dispositivos.  La duraciÃ³n de la baterÃ­a se basa en un volumen de audÃ­fonos configurado en 50%.:  Sin iluminaciÃ³n: 29 horas   IluminaciÃ³n predeterminada: 20 horas  Requisitos  Puerto USB 2.0 (puerto tipa A) PC con Windows 7 o superior, macOX 10.2 o posteriores, consola de video juegos PlayStation 4 / 5  Contenido	 En la caja	 AudÃ­fonos G733 con micrÃ³fono inalÃ¡mbricos LIGHTSPEED RGB para juegos  Diadema blanda reversible (acoplada)  MicrÃ³fono extraÃ­ble  Receptor inalÃ¡mbrico LIGHTSPEED (USB-A)   Cable de carga USB-C a USB-A', 6, 1),
	(12, 'LOGITECH VINCHA G733 Black InalÃ¡mbrica', '205', '../images/BFXLOV60.jpg', '../imagenesDescripcion/BFXLOV60.jpg', ' Model Brand	Logitech Model	G733 Part Number	981-000863 Details Compatibility	PC with Windows 7 or later, macOS X 10.12 or later, or PlayStation 4 gaming console (Optional) Internet access for Logitech G HUB Software Color	Black LED	RGB Operating Time	No lighting: 29 hours Default lighting: 20 hours Connectivity Connection Type	Wireless Connector	USB 2.0 Type A Wireless Type	2.4 GHZ LIGHTSPEED Wireless Range	Up to 20 meters Headphone Driver Unit 	PRO-G 40 mm Headphone Frequency Response 	20Hz-20KHz Headphone Input Impedance 	39 Ohms (passive) Headphone Sensitivity 	87.5 dB SPL/mW Ear Coupling 	Circumaural Weight	0.61 lb. Microphone Microphone Frequency Response 	100Hz-10KHz Features System Requirements	PC with Windows 7 or later, macOS X 10.12 or later, and USB port, or PlayStation 4 gaming console (Optional) Internet access for Logitech G HUB Software Features	Long-Lasting Comfort Lightweight (278g) with unique reversible and adjustable suspension headband and dual-layer memory foam earpads.  Advanced Audio Pro-G drivers and DTS Headphone: X2.0 surround create an immersive sound experience.  Vibrant Colors Express yourself with a diverse choice of bold colors. Accessories available separately.  LIGHTSPEED Wireless Pro-grade wireless with up to 29 hours of battery life and 20m range.  Front-Facing LIGHTSYNC RGB Lighting Customize dual-zone RGB lighting and effects from approx. 16.8 million colors.  Blue VO!CE Mic Technology Tune the detachable mic for ultra-clear voice comms with advanced noise reduction, compression, de-esser and more. Package Contents Package Contents	G733 LIGHTSPEED Wireless RGB Gaming Headset Reversible soft headband (attached) Detachable microphone LIGHTSPEED wireless receiver (USB-A) USB-C to USB-A charging cable', 6, 1),
	(13, 'LOGITECH VINCHA G733 BLUE InalÃ¡mbrica', '205', '../images/BFXLOV25.jpg', '../imagenesDescripcion/BFXLOV25.jpg', ' Model Brand	Logitech Series	G733  Model	981-00942  Especificaciones 		 Fisicas	 Longitud: 194 mm  Anchura: 190 mm  Altura: 195 mm  Peso: 278 g  Profundidad: 83 mm    Espcificaiones  TÃ©cnicas	 AudÃ­fono:  Transductor: PRO-G 40 mm  Respuesta de frecuencia: 20 Hz-20 kHz  Impedancia: 39 ohmios (pasiva), 5 kilohmios (activa)  Sensibilidad: 87,5 dB SPL/mW  MicrÃ³fono (varilla):  PatrÃ³n de captaciÃ³n de micrÃ³fono: Cardioide (unidireccional)  TamaÃ±o: 6 mm  Respuesta de frecuencia: 100 Hz - 10 kHz  Radio de acciÃ³n inalÃ¡mbrico10Depende del uso y de los dispositivos.  La duraciÃ³n de la baterÃ­a se basa en un volumen de audÃ­fonos configurado en 50%.: Hasta 20 metros  Tipo de conexiÃ³n: TecnologÃ­a inalÃ¡mbrica LIGHTSPEED a travÃ©s de USB  DuraciÃ³n de baterÃ­a (recargable)11Depende del uso y de los dispositivos.  La duraciÃ³n de la baterÃ­a se basa en un volumen de audÃ­fonos configurado en 50%.:  Sin iluminaciÃ³n: 29 horas   IluminaciÃ³n predeterminada: 20 horas  Requisitos  Puerto USB 2.0 (puerto tipa A) PC con Windows 7 o superior, macOX 10.2 o posteriores, consola de video juegos PlayStation 4 / 5  Contenido	 En la caja	 AudÃ­fonos G733 con micrÃ³fono inalÃ¡mbricos LIGHTSPEED RGB para juegos  Diadema blanda reversible (acoplada)  MicrÃ³fono extraÃ­ble  Receptor inalÃ¡mbrico LIGHTSPEED (USB-A)   Cable de carga USB-C a USB-A', 6, 1),
	(14, 'LOGITECH VINCHA G733 LILA InalÃ¡mbrica', '205', '../images/BFXLOV26.jpg', '../imagenesDescripcion/BFXLOV26.jpg', ' Brand	Logitech Series	G733  Model	981-000889  Especificaciones 		 Fisicas	 Longitud: 194 mm  Anchura: 190 mm  Altura: 195 mm  Peso: 278 g  Profundidad: 83 mm    Espcificaiones  TÃ©cnicas	 AudÃ­fono:  Transductor: PRO-G 40 mm  Respuesta de frecuencia: 20 Hz-20 kHz  Impedancia: 39 ohmios (pasiva), 5 kilohmios (activa)  Sensibilidad: 87,5 dB SPL/mW  MicrÃ³fono (varilla):  PatrÃ³n de captaciÃ³n de micrÃ³fono: Cardioide (unidireccional)  TamaÃ±o: 6 mm  Respuesta de frecuencia: 100 Hz - 10 kHz  Radio de acciÃ³n inalÃ¡mbrico10Depende del uso y de los dispositivos.  La duraciÃ³n de la baterÃ­a se basa en un volumen de audÃ­fonos configurado en 50%.: Hasta 20 metros  Tipo de conexiÃ³n: TecnologÃ­a inalÃ¡mbrica LIGHTSPEED a travÃ©s de USB  DuraciÃ³n de baterÃ­a (recargable)11Depende del uso y de los dispositivos.  La duraciÃ³n de la baterÃ­a se basa en un volumen de audÃ­fonos configurado en 50%.:  Sin iluminaciÃ³n: 29 horas   IluminaciÃ³n predeterminada: 20 horas  Requisitos  Puerto USB 2.0 (puerto tipa A) PC con Windows 7 o superior, macOX 10.2 o posteriores, consola de video juegos PlayStation 4 / 5  Contenido	 En la caja	 AudÃ­fonos G733 con micrÃ³fono inalÃ¡mbricos LIGHTSPEED RGB para juegos  Diadema blanda reversible (acoplada)  MicrÃ³fono extraÃ­ble  Receptor inalÃ¡mbrico LIGHTSPEED (USB-A)   Cable de carga USB-C a USB-A', 6, 1),
	(15, 'LOGITECH G VOLANTE Y PEDALERA G29', '399', '../images/BFXLOG29.jpg', '../imagenesDescripcion/BFXLOG29.jpg', ' Modelo\r\nMarca	Logitech\r\nSerie	G\r\nModelo	G29\r\nParte	941-000110\r\nDetalles\r\nColor	Negro\r\nEscribe	Rueda\r\nEspecificaciones	Rueda:\r\nRotaciÃ³n: 900 grados de tope a tope\r\nSensor de direcciÃ³n de efecto Hall\r\nRetroalimentaciÃ³n de fuerza de motor dual ProtecciÃ³n contra\r\nsobrecalentamiento\r\n\r\nPedales:\r\nPedal de freno no lineal\r\nSistema de agarre de alfombra patentado Agarre de\r\ntalÃ³n texturizado\r\nAutocalibrado\r\n\r\nMateriales:\r\nRadios de rueda: Aluminio anodizado\r\nCubierta de rueda Cosido a mano cuero Eje de\r\ndirecciÃ³n: acero\r\nPalas de cambio: acero inoxidable cepillado\r\nAbrazaderas de montaje: nailon reforzado con fibra de vidrio Estructuras\r\ny brazos de los pedales: acero laminado en frÃ­o Superficies de los\r\npedales: acero inoxidable cepillado Manguitos del\r\npistÃ³n del pedal: termoplÃ¡stico de polioximetileno (POM)\r\nRequisitos del sistema	\r\nPuerto USB con alimentaciÃ³n para PlayStation 5, PlayStation 4 o PlayStation 3\r\nO\r\nWindows 10\r\nCaracterÃ­sticas\r\nCaracterÃ­sticas	La simulaciÃ³n de conducciÃ³n Real Wheel\r\nImmersive cobra vida en los detalles. La retroalimentaciÃ³n de fuerza de motor dual te hace sentir cada deslizamiento de llanta y cambio de terreno. Cojinetes de bolas de acero sÃ³lido en el eje de la rueda dan peso y durabilidad. Las paletas de cambios y los pedales de piso de acero inoxidable aplican fuerza de precisiÃ³n. La rueda cubierta de cuero cosida a mano hace que cada automÃ³vil sea lujoso. El engranaje helicoidal ofrece un funcionamiento suave y silencioso.\r\n\r\nPedales de piso ajustables\r\nMantenga una posiciÃ³n del cuerpo de conducciÃ³n mÃ¡s realista con la unidad de pedal de piso separada con pedales de acelerador, freno y embrague integrados. Driving Force te permite acelerar, frenar y cambiar de marcha cÃ³modamente con la sensaciÃ³n de un coche real.\r\n\r\nCambio a sobremarcha\r\nPara llevar la experiencia de simulaciÃ³n de carreras a lo mÃ¡s alto, agregue el realismo de una palanca de cambios dedicada. Con una sensaciÃ³n de recorrido corto en una palanca de cambios de patrÃ³n "H" de 6 velocidades con reversa de empuje hacia abajo, la palanca de cambios Driving Force de Logitech G es un compaÃ±ero de manejo que no olvidarÃ¡ pronto.\r\n\r\nMontajes de escritorio y plataforma\r\nConduce sin miedo sabiendo que la rueda no se moverÃ¡ durante maniobras agresivas. El volante de carreras se monta de forma segura en tu mesa o equipo de carreras a travÃ©s de abrazaderas integradas o puntos de montaje con tornillos. G29 y G920 (volante, pedales y palanca de cambios) se montan perfectamente en las cabinas de simulaciÃ³n de carreras de Playseat para mayor realismo.\r\nDimensiones y peso\r\nDimensiÃ³n	Rueda: 10.62" x 10.23" x 10.94"\r\nPedales: 6.57" x 16.87" x 12.24"\r\nPeso	Rueda: 4.96 libras.\r\nPedales: 6,83 libras.\r\ncontenidos del paquete\r\ncontenidos del paquete	Volante\r\nPedales\r\nAdaptador de corriente\r\nDocumentaciÃ³n del usuario\r\n', 8, 1);



