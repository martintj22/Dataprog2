CREATE TABLE `donation` (
  `Amount` int(11) NOT NULL,
  `userid` int(11) NOT NULL
); 


CREATE TABLE `donations_pack` (
  `Tittle` text NOT NULL,
  `required_amount` int(11) NOT NULL
); 

CREATE TABLE `games` (
  `gamename` varchar(60) NOT NULL,
  `Images` varchar(255) NOT NULL,
  `genere` text NOT NULL,
  `GameID` int(11) NOT NULL
); 


CREATE TABLE `owned_games` (
  `userid` int(20) NOT NULL,
  `gameid` int(20) NOT NULL
) 


CREATE TABLE `users` (
  `Name` text NOT NULL,
  `Rank` text NOT NULL,
  `Games` varchar(60) NOT NULL,
  `id` int(11) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `donation`
  ADD KEY `Amount` (`Amount`);

ALTER TABLE `games`
  ADD PRIMARY KEY (`GameID`),
  ADD UNIQUE KEY `gamename` (`gamename`),
  ADD UNIQUE KEY `GameID` (`GameID`);

ALTER TABLE `owned_games`
  ADD PRIMARY KEY (`gameid`),
  ADD UNIQUE KEY `gameid` (`gameid`),
  ADD UNIQUE KEY `userid` (`userid`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `owned_games`
  ADD CONSTRAINT `owned_games_ibfk_1` FOREIGN KEY (`gameid`) REFERENCES `games` (`GameID`),
  ADD CONSTRAINT `owned_games_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);
COMMIT;


