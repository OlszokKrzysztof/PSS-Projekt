-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 28 Sty 2023, 01:29
-- Wersja serwera: 10.4.25-MariaDB
-- Wersja PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `projektse`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Travel'),
(2, 'Food'),
(3, 'Fitness'),
(4, 'Lifestyle'),
(5, 'DIY'),
(6, 'Personal');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_polish_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `content`, `created_at`, `post_id`) VALUES
(7, 1, 'bruh', '2023-01-23 19:24:15', 2),
(8, 1, 'bruh', '2023-01-23 19:26:14', 2),
(9, 1, 'xyz', '2023-01-23 19:26:24', 2),
(11, 1, 'Przeczytałem i jednak fajne', '2023-01-26 18:31:31', 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL,
  `description` text COLLATE utf8mb4_polish_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `user_id`, `created_at`, `category_id`) VALUES
(6, 'Życie w podróży', 'Kiedyś znalazłbyś tu zdawkową informację – nazywam się Mikołaj i kocham podróże. Poważnie ? Co za nuda. Dużo od tego czasu się zmieniło. Imię i pasja do poznawania świata pozostały. To co nowe, to sposób pisania, więcej konkretów i próba pokazania ciekawych miejsc z nowej perspektywy. I chociaż nadal pracuję na etacie, sam sobie wytłumaczyłem, że życie w podroży tymczasowo realizuję na raty.\r\n\r\nJestem kolekcjonerem wspomnień i zależy mi na tym, żeby Twój wyjazd też wywołał mnóstwo pozytywnych emocji. Znajdziesz tu więc pomysły na podróże, relacje z wypraw, praktyczne wskazówki. Tak więc rozgość się, a potem zacznij działać', 1, '2023-01-28 00:14:00', 1),
(7, 'Co warto zobaczyć w Łodzi?', 'Łódź – chyba nie będzie przesadą stwierdzenie, że to miasto zupełnie inne niż wszystkie, postindustrialne, z krótką, acz arcyciekawą historią, która spokojnie mogłaby posłużyć za kanwę fascynującego filmowego scenariusza. \r\n\r\nWieś, która w kilka dekad stała się przemysłowym sercem kraju, wielkie fortuny i jeszcze większe upadki, multi-kulturowy i wieloreligijny tygiel, w którym przenikały się tradycje, obrzędy i przyzwyczajenia. Przyznamy – historia Łodzi naprawdę nas wciągnęła, właśnie przez tę swoją odmienność i wątki, których trudno szukać w innych polskich miastach.', 1, '2023-01-28 00:14:41', 1),
(8, 'MAKOWA KRAJANKA', 'Makowa krajanka z cytrusową pianką i mango podbiła moje serce. Przepyszne i lekkie ciasto, na które składa się puszysty biszkopt, biszkopt z makiem i cytrynowa pianka , w której zatopiłam kawałki mango. Ciasto jest proste do wykonania. Wystarczy upiec biszkopty i przygotować piankę.\r\n\r\nJak zrobić piankę? Cytrusowa pianka to nic innego jak bita śmietana połączona z kremowym twarożkiem i sokiem  z cytryny, w którym rozpuściłam żelatynę. Do pianki można użyć kupnej, cytrynowej galaretki ale ja zdecydowałam się zrobić domową galaretkę ze świeżo wyciśniętego soku z cytryny. Pianka ma delikatny, cytrynowy smak, który świetnie się komponuje ze słodkim biszkoptem i makiem. Przygotowanie domowej galaretki jest naprawdę łatwe i zawsze możecie zrobić ją sami pod warunkiem, że macie żelatynę w domu.\r\n\r\nMak i cytryna często występują razem w moich wypiekach. Piekłam już tort makowy z cytrynowym kremem jak również krajankę makowa panienka. Każdy z nich zawiera cytrynę i mak, a jednak różnią się smakiem i wyglądem.', 1, '2023-01-28 00:15:22', 2),
(9, 'GĘSTA ZUPA ROZGRZEWAJĄCA', 'Deszcz, wilgoć, wiatr…nic dziwnego, że zachciało mi się zupy. Kremowa zupa brokułowa jest syta, rozgrzewająca i wprawia mnie w błogi stan. Przemyciłam do niej mnóstwo warzyw, które sprawiają, że zupa brokułowa jest pyszna i zdrowa. Zupa na obiad to danie jednogarnkowe. Lubię gęste zupy, więc zagęściłam ją zmiksowanym selerem, ostrym żółtym serem i po części brokułami.\r\n\r\nJeśli jeszcze nie posiadacie ulubionego przepisu na zupę to wypróbujcie tę brokułową! Niech was nie zwodzi fakt, że to tylko zupa. Zupa jest bardzo kaloryczna i nie są to puste kalorie. Jest to pyszne i zdrowe danie, które daje wiele opcji w przyrządzaniu. Na przykład śmietanę można zamienić na mleko kokosowe. Równie dobrze można wybrać dowolny żółty ser. Polecam jednak ser o zdecydowanym smaku jak ostry cheddar. Do tej brokułowej dodałam szwedzki ser zwany västerbottensost. Słodki posmak warzyw świetnie kontrastuje z ostrym w smaku serem.', 0, '2023-01-28 00:39:23', 2),
(10, 'Codziennie Fit!', 'Teraz to już nie tylko blog – to cała społeczność! Z bloga zrodziła się drużyna Codziennie Fit – społeczność ludzi w każdym wieku, którzy wiedzą, że bycie fit to nie tylko wygląd, ale przede wszystkim zdrowie! Jak dołączyć do drużyny? Po prostu ćwicz ze mną i koniecznie zobacz nasz hasztag #druzynaCF na Instagramie. I już jesteś, witamy!', 0, '2023-01-28 00:42:51', 3),
(11, 'JAK ZROBIĆ DREWNIANY STÓŁ DIY NA TARAS?', 'Jak zrobić drewniany stół DIY na taras? Znowu to zrobiłam. Nie wiem, który to już mój stół, ale było ich chyba kilkanaście, a może już kilkadziesiąt. Na blogu jest ich mnóstwo. Są stoły, stoliki ze szpuli, skrzyni, industrialny, w kształcie pufy, z marmurowym blatem i z drewnianym no mam tu cały przekrój. Wróciła mi też potrzeba posiadania drewnianego stołu na tarasie. Meble, które na nim mam miały w komplecie plastikowy stolik. O ile sofa, i fotele wyglądają świetnie, to stolik już nie. Dlatego skok do marketu budowlanego, gdzie kupiłam deski nieheblowane i 4 metalowe nogi.', 0, '2023-01-28 00:44:07', 5),
(12, 'JAK URZĄDZIĆ SALON W BLOKU', 'Jak urządzić salon w bloku? Nowe budownictwo nie pozostawia wiele przestrzeni do kreatywnego urządzania, bo większość salonów z aneksem wygląda bardzo podobnie. W projekcie „Golden Suite” mamy typowy układ i dobry przykład jak taki nie za duży salon urządzić. Salon to przede wszystkim strefa relaksu, miejsce odpoczynku po pracy i zabaw jeżeli w domu są dzieci. Musi spełniać też wiele dodatkowych funkcji, bo mieszkania w bloku mają swoje ograniczenia. Powinna być tam rozkładana kanapa dla gości, a meble na tyle mobilne, aby robić przestrzeń do zabawy, ćwiczeń, czy tańca jak domówka się rozkręci. ', 0, '2023-01-28 00:44:35', 5);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'mod');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `stars`
--

CREATE TABLE `stars` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `stars` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `stars`
--

INSERT INTO `stars` (`id`, `user_id`, `stars`, `post_id`) VALUES
(1, 1, 4, 1),
(2, 1, 2, 1),
(3, 1, 1, 2),
(4, 1, 5, 2),
(5, 3, 2, 2),
(6, 3, 2, 2),
(7, 5, 3, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(15) NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_polish_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_polish_ci NOT NULL,
  `sign_date` date NOT NULL DEFAULT current_timestamp(),
  `update_date` date DEFAULT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `sign_date`, `update_date`, `role_id`) VALUES
(1, 'admin@wp.pl', '123', '2023-01-14', NULL, 1),
(4, 'mod@wp.pl', '123', '2023-01-26', NULL, 3),
(6, 'user1@wp.pl', '123', '2023-01-28', NULL, 2);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `stars`
--
ALTER TABLE `stars`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT dla tabeli `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT dla tabeli `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `stars`
--
ALTER TABLE `stars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
