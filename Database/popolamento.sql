USE TechWeb;
DELETE FROM carte_in_mazzo;
DELETE FROM mazzo;
DELETE FROM user;
DELETE FROM carta;
/* Popolamento Tabella Carte */
INSERT INTO carta(Nome, Costo_verde, Costo_rosso, Costo_blu, Costo_bianco, Costo_nero, Costo_nocolor, Tipo, Descrizione, Flavour_text, Edizione, Rarità, Artista, DEF, ATK, img_path) VALUES
/*Id 1*/('Time Sieve', 0, 0, 1, 0, 1, 0, 'Artefatto', 'Sacrifice five artifacts: Take an extra turn
  after this one.', '"Prego di non essere mai considerata vecchia o inutile" -- Sharuum Egemone',
  'Alara Reborn', 'Rara', 'Franz', NULL, NULL, 'Resources/carta1.jpg'),

/*Id 2*/('Forest', NULL, NULL, NULL, NULL, NULL, NULL, 'Terra', NULL, NULL, 'Duel Decks',
  'Terra', 'John Avon', NULL, NULL, 'Resources/carta4.jpeg'),

/*Id 3*/('Magmaw',0,2,0,0,0,3,'Creatura - Elementale','Sacrifice a nonland permanent:
  Magmaw deals 1 damage to any target.','"The purpose of existence is simple:
  everything is fuel for the magmaw." —Jaji, magmaw worshipper','Rise of the Eldrazi',
  'Rara','Karl Kopinski',4,4,'Resources/carta5.jpeg'),

/*Id 4*/('Plant Elemental',1,0,0,0,0,1,'Creatura - Elementale Pianta','When Plant
  Elemental enters the battlefield, sacrifice it unless you sacrifice a Forest.',
  NULL,'Portal','Non comune','Ted Naifeh',4,3,'Resources/carta6.jpeg'),

/*Id 5*/('Barren Moor',NULL,NULL,NULL,NULL,NULL,NULL,'Terra','Barren Moor enters the
  battlefield tapped.','Commander 2018','Archenemy','Comune',' Heather Hudson',NULL,NULL,
  'Resources/carta7.png'),

/*Id 6*/('Mind Raker',0,0,0,0,1,3,'Creatura - Eldrazi Processor','Devoid (This card has
  no color.) When Mind Raker enters the battlefield, you may put a card an
  opponent owns from exile into that player\'s graveyard. If you do, each
  opponent discards a card.','It consumes any dreams of victory.','Battle for
  Zendikar','Comune','Lius Lasahido',3,3,'Resources/carta8.png'),

/*Id 7*/('Cabal Patriarch',0,0,0,0,3,3,'Legendary Creature — Human Wizard','(2+B) Sacrifice a
  creature: Target creature gets -2/-2 until end of turn. (2+B) Exile a creature card
  from your graveyard: Target creature gets -2/-2 until end of turn.',NULL,'Odyssey',
  'Rara','Mark Zug',5,5,'Resources/carta9.jpeg'),

/*Id 8*/('Oriss, Samite Guardian',0,0,2,0,1,0,' Legendary Creature — Human Cleric','Prevent
  all damage that would be dealt to target creature this turn. Grandeur — Discard
  another card named Oriss, Samite Guardian: Target player can\'t cast spells
  this turn, and creatures that player controls can\'t attack this turn.',NULL,
  'Future Sight','Rara','Michael Komarck',3,1,'Resources/carta10.jpeg'),

/*Id 9*/('Island', NULL, NULL, NULL, NULL, NULL, NULL, 'Terra', NULL, NULL, ' Throne of
  Eldraine','Terra', 'John Avon', NULL, NULL, 'Resources/carta11.png'),

/*Id 10*/('Swamp', NULL, NULL, NULL, NULL, NULL, NULL, 'Palude', NULL, NULL, ' Throne of
  Eldraine','Terra', 'Paul Scott Canavan', NULL, NULL, 'Resources/carta12.png'),

/*Id 11*/('Battle Mastery',0,0,0,1,0,2,'Enchantment — Aura','Enchant creature: Enchanted
  creature has double strike. (It deals both first-strike and regular combat
  damage.)','"There is elegance in all the Ojutai do—even their killing."—Kirada
  , Silumgar enforcer','Battlebond','Non comune','Viktor Titov',NULL,NULL,
  'Resources/carta13.png'),

/*Id 12*/('Cobra Trap',2,0,0,0,0,4,' Instant — Trap','If a noncreature permanent under
  your control was destroyed this turn by a spell or ability an opponent
  controlled, you may pay Green rather than pay this spell\'s mana cost. Create
  four 1/1 green Snake creature tokens.',NULL,' Magic: The Gathering-Commander',
  'Non comune','Scott Chou',NULL,NULL,'Resources/carta14.jpeg'),

/*Id 13*/('Aerial Caravan',0,0,2,0,0,4,'Creature — Human Soldier','Flying (1+2B): Exile
  the top card of your library. Until end of turn, you may play that card.
  (Reveal the card as you exile it.)','Successful delivery is not guaranteed.',
  'Mercadian Masques','Rara','DiTerlizzi',3,4,'Resources/carta15.jpeg'),

/*Id 14*/('Act of Aggression', 0, 2, 0, 0, 0, 2, 'Istant', 'Gain control of target
  creature an opponent controls until the end of turn. Untap that creature. It gains
  haste until the end of the turn.', NULL, 'Commander 2015', 'Uncommon','Whit Brachna',
  NULL, NULL, 'Resources/carta16.jpg'),

/*Id 15*/('Abbey Griffin', 0, 0, 0, 1, 0, 3, 'Creature — Griffin', 'Flying, vigilance',
  'The darkness swarms with vampires and ghouls, but allies are not lacking. —
   Mikaeus, the Lunarca', 'Innistrad', 'Common', 'Jaime Jones', 2, 2, 'Resources/carta1.jpg'),

/*Id 16*/('Alhammarret, High Arbiter', 0, 0, 2, 0, 0, 5, 'Legendary Creature — Sphinx', 'Flying.
  As Alhammarret, High Arbiter enters the battlefield, each opponent reveals their hand. You choose
  the name of a nonland card revealed this way. Your opponents can \'t cast spells with the chosen name
  (as long as this creature is on the battlefield).)', NULL, 'Magic Origins', 'Rare', 'Richard Wright',
  5, 5, "Resources/carta2.jpg"),

/*Id 17*/('Anowon, the Ruin Sage', 0, 0, 0, 0, 2, 3, 'Legendary Creature — Vampire Shaman',
  'At the beginning of your upkeep, each player sacrifices a non-Vampire creature.', '"Too many have
  died looking for that map. And now here it is in the hands of the arrogant little girl Chandra Nalaar."',
  'Commander 2017', 'Rare', 'Dan Scott', 4, 3, 'Resources/carta3.jpg'),

/*Id 18*/('Abundant Growth', 1, 0, 0, 0, 0, 0, 'Enchantment — Aura', 'Enchant land
  When Abundant Growth enters the battlefield, draw a card. Enchanted land has
  Tap: Add one mana of any color.', NULL, 'Avacyn Restored', 'Common', 'Vincent Proce', NULL, NULL,
  "Resources/carta17.jpg"),

/*Id 19*/('Acid Web Spider', 2, 0, 0, 0, 0, 3, 'Creature — Spider', 'Reach. When Acid Web Spider enters
  the battlefield, you may destroy target Equipment.', 'His canvas is an excellent source of molten
  copper for the brave or the foolish.', 'Scars of Mirrodin', 'Uncommon', 'Austin Hsu', 3, 5, 'Resources/carta18.jpg'),

/*Id 20*/('Academy Drake', 0, 0, 1, 0, 0, 2, 'Creature — Drake', 'Kicker 4 (You may pay an additional 4 as you
  cast this spell). Flying. If Academy Drake was kicked, it enters the battlefield with two +1/+1 counters on it.',
  NULL, 'Dominaria', 'Common', 'Svetlin Velinov', 2, 2, 'Resources/carta19.jpg');


/*Popolamento Tabella user*/
INSERT INTO user (Username,Pwd,Email,Admin) VALUES
('usr1','robba','ciccio.pasticcio@gmail.com',0),
('usr2','robbausr2','paolo@rossi.com',0),
('usr3','robbausr3','magic.lol@gmail.com',0),
('amm1','robbaamm1','amminitratore1@gmail.com',1),
('amm2','robbaamm2','amminitratore2@outlook.com',1);

/* Popolamento Tabella Mazzi */
INSERT INTO mazzo (Nome,Autore,Tipo,Colore_verde,Colore_rosso,Colore_blu,Colore_nero,Colore_bianco,Upvote) VALUES
('Aggro 1','usr1','Aggro',0,0,1,0,0,0),/*Id 1*/
('Control 1','usr1','Control',0,0,1,1,0,0),/*Id 2*/
('Primo mazzo','usr2','Misto',1,0,1,0,0,0),/*Id 3*/
('Mono Black Control','usr3','Mono Black',0,0,0,1,0,0),/*Id 4*/
('Mono White Angels','usr2','Mono White',0,0,0,0,1,0),/*Id 5*/
('Grixis Mill','usr2','Mill',0,1,1,1,0,0),/*Id 6*/
('Elves','usr1','Mono Green',1,0,0,0,0,0),/*Id 7*/
('Mazeura\'s Nightmares','usr2','Mono Black Sacrifice',0,0,0,1,0,0);/*Id 8*/

/*Popolamento Tabella carte_in_mazzo*/
INSERT INTO carte_in_mazzo (Id_mazzo,Id_carta,Q_tà) VALUES
/*mazzo 1*/
(1,1,1),
(1,2,3),
(1,3,2),
(1,12,1),
(1,13,2),
(1,10,7),
(1,5,2),
(1,4,2),
(1,11,4),
/*mazzo2*/
(2,6,1),
(2,4,1),
(2,3,1),
(2,9,3),
(2,1,3),
(2,2,1),
(2,13,1),
(2,10,1),
(2,11,3),
/*mazzo3 --> VUOTO*/
/*mazzo 4*/
(4,1,3),
(4,2,7),
(4,6,2),
(4,4,1),
(4,8,1),
(4,13,1),
(4,12,4),
(4,10,1),
/*mazzo 5*/
(5,3,1),
(5,2,2),
(5,4,3),
(5,7,5),
(5,8,2),
(5,12,1),
/*mazzo 6*/
(6,12,4),
(6,13,1),
(6,11,1),
(6,1,2),
(6,2,3),
(6,4,1),
(6,6,2),
(6,7,1),
/*mazzo 7*/
(7,4,1),
(7,5,1),
(7,6,1),
(7,7,1),
(7,8,1),
(7,9,1),
(7,10,1),
(7,11,1),
/*mazzo 8*/
(8,5,4),
(8,6,1),
(8,12,1),
(8,10,2);
