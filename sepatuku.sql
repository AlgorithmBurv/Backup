-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Nov 2025 pada 13.59
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sepatuku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `logo`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 'Adidas', 'adidas', '01K3MDEB6J5WSAHTFQA4F5AR6A.png', NULL, '2025-08-26 17:04:32', '2025-08-26 17:04:32'),
(4, 'Nike', 'nike', '01K3MDFH7J3PVCNMEN0X3FEWAZ.png', NULL, '2025-08-26 17:05:11', '2025-08-26 17:05:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-livewire-rate-limiter:16d36dff9abd246c67dfac3e63b993a169af77e6', 'i:3;', 1763785179),
('laravel-cache-livewire-rate-limiter:16d36dff9abd246c67dfac3e63b993a169af77e6:timer', 'i:1763785179;', 1763785179);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `icon`, `deleted_at`, `created_at`, `updated_at`) VALUES
(11, 'Sneakers', 'sneakers', '01K3MDGRS6DG3QGP0NG1EVTCFY.jpg', NULL, '2025-08-26 17:05:52', '2025-08-26 17:05:52'),
(12, 'Running', 'running', '01K3MDH80Z0WJYRRCYBZ7BSQD2.jpg', NULL, '2025-08-26 17:06:07', '2025-08-26 17:06:07'),
(13, 'Gym', 'gym', '01K3MDHP7E0MSMN5WJHMS2DTN9.jpg', NULL, '2025-08-26 17:06:22', '2025-08-26 17:06:22'),
(14, 'Sandal', 'sandal', '01K3MDJ44MSGJK4HE2Z92W7DGR.jpg', NULL, '2025-08-26 17:06:36', '2025-08-26 17:06:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `exports`
--

CREATE TABLE `exports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `completed_at` timestamp NULL DEFAULT NULL,
  `file_disk` varchar(255) NOT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `exporter` varchar(255) NOT NULL,
  `processed_rows` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `total_rows` int(10) UNSIGNED NOT NULL,
  `successful_rows` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `exports`
--

INSERT INTO `exports` (`id`, `completed_at`, `file_disk`, `file_name`, `exporter`, `processed_rows`, `total_rows`, `successful_rows`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2025-09-26 02:36:54', 'local', 'export-1-product-transactions', 'App\\Filament\\Exports\\ProductTransactionExporter', 11, 11, 11, 1, '2025-09-26 01:51:00', '2025-09-26 02:36:54'),
(2, '2025-09-26 02:36:55', 'local', 'export-2-product-transactions', 'App\\Filament\\Exports\\ProductTransactionExporter', 11, 11, 11, 1, '2025-09-26 02:31:09', '2025-09-26 02:36:55'),
(3, '2025-09-26 02:40:05', 'local', 'export-3-product-transactions', 'App\\Filament\\Exports\\ProductTransactionExporter', 11, 11, 11, 1, '2025-09-26 02:40:04', '2025-09-26 02:40:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_import_rows`
--

CREATE TABLE `failed_import_rows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`data`)),
  `import_id` bigint(20) UNSIGNED NOT NULL,
  `validation_error` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `failed_jobs`
--

INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(1, '44f262f2-8d8b-42c3-8b2a-acc66119454d', 'database', 'default', '{\"uuid\":\"44f262f2-8d8b-42c3-8b2a-acc66119454d\",\"displayName\":\"Filament\\\\Notifications\\\\DatabaseNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:1;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:43:\\\"Filament\\\\Notifications\\\\DatabaseNotification\\\":2:{s:4:\\\"data\\\";a:11:{s:7:\\\"actions\\\";a:2:{i:0;a:22:{s:4:\\\"name\\\";s:12:\\\"download_csv\\\";s:5:\\\"color\\\";N;s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";E:42:\\\"Filament\\\\Support\\\\Enums\\\\IconPosition:Before\\\";s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:13:\\\"Download .csv\\\";s:11:\\\"shouldClose\\\";b:0;s:16:\\\"shouldMarkAsRead\\\";b:1;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:1;s:15:\\\"shouldPostToUrl\\\";b:0;s:4:\\\"size\\\";E:33:\\\"Filament\\\\Support\\\\Enums\\\\Size:Small\\\";s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";s:128:\\\"\\/filament\\/exports\\/1\\/download?authGuard=web&format=csv&signature=0cb43bd3f19f7b20f74331983fdeb67a64e8a3b09695bb956e035a1a40f2c5c0\\\";s:4:\\\"view\\\";s:25:\\\"filament::components.link\\\";}i:1;a:22:{s:4:\\\"name\\\";s:13:\\\"download_xlsx\\\";s:5:\\\"color\\\";N;s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:14:\\\"Download .xlsx\\\";s:11:\\\"shouldClose\\\";b:0;s:16:\\\"shouldMarkAsRead\\\";b:1;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:1;s:15:\\\"shouldPostToUrl\\\";b:0;s:4:\\\"size\\\";r:31;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";s:129:\\\"\\/filament\\/exports\\/1\\/download?authGuard=web&format=xlsx&signature=f15eb2481d571d4fcfaa3a23e063342500fa2704a3a5a397c8af2d0a8690259f\\\";s:4:\\\"view\\\";s:25:\\\"filament::components.link\\\";}}s:4:\\\"body\\\";s:67:\\\"Your product transaction export has completed and 11 rows exported.\\\";s:5:\\\"color\\\";N;s:8:\\\"duration\\\";s:10:\\\"persistent\\\";s:4:\\\"icon\\\";s:23:\\\"heroicon-o-check-circle\\\";s:9:\\\"iconColor\\\";s:7:\\\"success\\\";s:6:\\\"status\\\";s:7:\\\"success\\\";s:5:\\\"title\\\";s:16:\\\"Export completed\\\";s:4:\\\"view\\\";N;s:8:\\\"viewData\\\";a:0:{}s:6:\\\"format\\\";s:8:\\\"filament\\\";}s:2:\\\"id\\\";s:36:\\\"465f791d-c932-4042-9985-576e9ea56541\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}}\"},\"createdAt\":1758879414,\"delay\":null}', 'PDOException: SQLSTATE[42S02]: Base table or view not found: 1146 Table \'sepatuku.notifications\' doesn\'t exist in C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\MySqlConnection.php:47\nStack trace:\n#0 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\MySqlConnection.php(47): PDO->prepare(\'insert into `no...\')\n#1 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(811): Illuminate\\Database\\MySqlConnection->Illuminate\\Database\\{closure}(\'insert into `no...\', Array)\n#2 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(778): Illuminate\\Database\\Connection->runQueryCallback(\'insert into `no...\', Array, Object(Closure))\n#3 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\MySqlConnection.php(42): Illuminate\\Database\\Connection->run(\'insert into `no...\', Array, Object(Closure))\n#4 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php(3804): Illuminate\\Database\\MySqlConnection->insert(\'insert into `no...\', Array)\n#5 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(2220): Illuminate\\Database\\Query\\Builder->insert(Array)\n#6 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Model.php(1410): Illuminate\\Database\\Eloquent\\Builder->__call(\'insert\', Array)\n#7 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Model.php(1238): Illuminate\\Database\\Eloquent\\Model->performInsert(Object(Illuminate\\Database\\Eloquent\\Builder))\n#8 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany.php(370): Illuminate\\Database\\Eloquent\\Model->save()\n#9 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\helpers.php(399): Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany->Illuminate\\Database\\Eloquent\\Relations\\{closure}(Object(Illuminate\\Notifications\\DatabaseNotification))\n#10 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany.php(367): tap(Object(Illuminate\\Notifications\\DatabaseNotification), Object(Closure))\n#11 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\Channels\\DatabaseChannel.php(19): Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany->create(Array)\n#12 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\NotificationSender.php(163): Illuminate\\Notifications\\Channels\\DatabaseChannel->send(Object(App\\Models\\User), Object(Filament\\Notifications\\DatabaseNotification))\n#13 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\NotificationSender.php(118): Illuminate\\Notifications\\NotificationSender->sendToNotifiable(Object(App\\Models\\User), \'f2f969bf-5bc2-4...\', Object(Filament\\Notifications\\DatabaseNotification), \'database\')\n#14 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\Localizable.php(19): Illuminate\\Notifications\\NotificationSender->Illuminate\\Notifications\\{closure}()\n#15 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\NotificationSender.php(113): Illuminate\\Notifications\\NotificationSender->withLocale(NULL, Object(Closure))\n#16 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\ChannelManager.php(54): Illuminate\\Notifications\\NotificationSender->sendNow(Object(Illuminate\\Database\\Eloquent\\Collection), Object(Filament\\Notifications\\DatabaseNotification), Array)\n#17 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\SendQueuedNotifications.php(118): Illuminate\\Notifications\\ChannelManager->sendNow(Object(Illuminate\\Database\\Eloquent\\Collection), Object(Filament\\Notifications\\DatabaseNotification), Array)\n#18 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Notifications\\SendQueuedNotifications->handle(Object(Illuminate\\Notifications\\ChannelManager))\n#19 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(43): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#20 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(96): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#21 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#22 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(835): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#23 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Container\\Container->call(Array)\n#24 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#25 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(137): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#26 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(136): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#27 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(134): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Notifications\\SendQueuedNotifications), false)\n#28 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#29 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(137): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#30 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(127): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#31 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(68): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#32 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#33 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(444): Illuminate\\Queue\\Jobs\\Job->fire()\n#34 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(394): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#35 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(180): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#36 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(148): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#37 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(131): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#38 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#39 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(43): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#40 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(96): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#41 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#42 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(835): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#43 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#44 C:\\xampp\\htdocs\\sepatuku\\vendor\\symfony\\console\\Command\\Command.php(318): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#45 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#46 C:\\xampp\\htdocs\\sepatuku\\vendor\\symfony\\console\\Application.php(1092): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#47 C:\\xampp\\htdocs\\sepatuku\\vendor\\symfony\\console\\Application.php(341): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#48 C:\\xampp\\htdocs\\sepatuku\\vendor\\symfony\\console\\Application.php(192): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#49 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(197): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#50 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1234): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#51 C:\\xampp\\htdocs\\sepatuku\\artisan(16): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#52 {main}\n\nNext Illuminate\\Database\\QueryException: SQLSTATE[42S02]: Base table or view not found: 1146 Table \'sepatuku.notifications\' doesn\'t exist (Connection: mysql, SQL: insert into `notifications` (`id`, `type`, `data`, `read_at`, `notifiable_id`, `notifiable_type`, `updated_at`, `created_at`) values (465f791d-c932-4042-9985-576e9ea56541, Filament\\Notifications\\DatabaseNotification, {\"actions\":[{\"name\":\"download_csv\",\"color\":null,\"event\":null,\"eventData\":[],\"dispatchDirection\":false,\"dispatchToComponent\":null,\"extraAttributes\":[],\"icon\":null,\"iconPosition\":\"before\",\"iconSize\":null,\"isOutlined\":false,\"isDisabled\":false,\"label\":\"Download .csv\",\"shouldClose\":false,\"shouldMarkAsRead\":true,\"shouldMarkAsUnread\":false,\"shouldOpenUrlInNewTab\":true,\"shouldPostToUrl\":false,\"size\":\"sm\",\"tooltip\":null,\"url\":\"\\/filament\\/exports\\/1\\/download?authGuard=web&format=csv&signature=0cb43bd3f19f7b20f74331983fdeb67a64e8a3b09695bb956e035a1a40f2c5c0\",\"view\":\"filament::components.link\"},{\"name\":\"download_xlsx\",\"color\":null,\"event\":null,\"eventData\":[],\"dispatchDirection\":false,\"dispatchToComponent\":null,\"extraAttributes\":[],\"icon\":null,\"iconPosition\":\"before\",\"iconSize\":null,\"isOutlined\":false,\"isDisabled\":false,\"label\":\"Download .xlsx\",\"shouldClose\":false,\"shouldMarkAsRead\":true,\"shouldMarkAsUnread\":false,\"shouldOpenUrlInNewTab\":true,\"shouldPostToUrl\":false,\"size\":\"sm\",\"tooltip\":null,\"url\":\"\\/filament\\/exports\\/1\\/download?authGuard=web&format=xlsx&signature=f15eb2481d571d4fcfaa3a23e063342500fa2704a3a5a397c8af2d0a8690259f\",\"view\":\"filament::components.link\"}],\"body\":\"Your product transaction export has completed and 11 rows exported.\",\"color\":null,\"duration\":\"persistent\",\"icon\":\"heroicon-o-check-circle\",\"iconColor\":\"success\",\"status\":\"success\",\"title\":\"Export completed\",\"view\":null,\"viewData\":[],\"format\":\"filament\"}, ?, 1, App\\Models\\User, 2025-09-26 09:36:54, 2025-09-26 09:36:54)) in C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php:824\nStack trace:\n#0 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(778): Illuminate\\Database\\Connection->runQueryCallback(\'insert into `no...\', Array, Object(Closure))\n#1 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\MySqlConnection.php(42): Illuminate\\Database\\Connection->run(\'insert into `no...\', Array, Object(Closure))\n#2 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php(3804): Illuminate\\Database\\MySqlConnection->insert(\'insert into `no...\', Array)\n#3 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(2220): Illuminate\\Database\\Query\\Builder->insert(Array)\n#4 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Model.php(1410): Illuminate\\Database\\Eloquent\\Builder->__call(\'insert\', Array)\n#5 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Model.php(1238): Illuminate\\Database\\Eloquent\\Model->performInsert(Object(Illuminate\\Database\\Eloquent\\Builder))\n#6 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany.php(370): Illuminate\\Database\\Eloquent\\Model->save()\n#7 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\helpers.php(399): Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany->Illuminate\\Database\\Eloquent\\Relations\\{closure}(Object(Illuminate\\Notifications\\DatabaseNotification))\n#8 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany.php(367): tap(Object(Illuminate\\Notifications\\DatabaseNotification), Object(Closure))\n#9 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\Channels\\DatabaseChannel.php(19): Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany->create(Array)\n#10 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\NotificationSender.php(163): Illuminate\\Notifications\\Channels\\DatabaseChannel->send(Object(App\\Models\\User), Object(Filament\\Notifications\\DatabaseNotification))\n#11 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\NotificationSender.php(118): Illuminate\\Notifications\\NotificationSender->sendToNotifiable(Object(App\\Models\\User), \'f2f969bf-5bc2-4...\', Object(Filament\\Notifications\\DatabaseNotification), \'database\')\n#12 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\Localizable.php(19): Illuminate\\Notifications\\NotificationSender->Illuminate\\Notifications\\{closure}()\n#13 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\NotificationSender.php(113): Illuminate\\Notifications\\NotificationSender->withLocale(NULL, Object(Closure))\n#14 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\ChannelManager.php(54): Illuminate\\Notifications\\NotificationSender->sendNow(Object(Illuminate\\Database\\Eloquent\\Collection), Object(Filament\\Notifications\\DatabaseNotification), Array)\n#15 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\SendQueuedNotifications.php(118): Illuminate\\Notifications\\ChannelManager->sendNow(Object(Illuminate\\Database\\Eloquent\\Collection), Object(Filament\\Notifications\\DatabaseNotification), Array)\n#16 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Notifications\\SendQueuedNotifications->handle(Object(Illuminate\\Notifications\\ChannelManager))\n#17 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(43): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#18 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(96): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#19 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#20 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(835): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#21 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Container\\Container->call(Array)\n#22 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#23 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(137): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#24 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(136): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#25 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(134): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Notifications\\SendQueuedNotifications), false)\n#26 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#27 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(137): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#28 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(127): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#29 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(68): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#30 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#31 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(444): Illuminate\\Queue\\Jobs\\Job->fire()\n#32 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(394): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#33 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(180): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#34 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(148): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#35 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(131): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#36 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#37 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(43): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#38 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(96): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#39 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#40 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(835): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#41 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#42 C:\\xampp\\htdocs\\sepatuku\\vendor\\symfony\\console\\Command\\Command.php(318): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#43 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#44 C:\\xampp\\htdocs\\sepatuku\\vendor\\symfony\\console\\Application.php(1092): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#45 C:\\xampp\\htdocs\\sepatuku\\vendor\\symfony\\console\\Application.php(341): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#46 C:\\xampp\\htdocs\\sepatuku\\vendor\\symfony\\console\\Application.php(192): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#47 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(197): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#48 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1234): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#49 C:\\xampp\\htdocs\\sepatuku\\artisan(16): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#50 {main}', '2025-09-26 02:36:54');
INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(2, '78357547-655b-422b-b8e4-d83ce35098b3', 'database', 'default', '{\"uuid\":\"78357547-655b-422b-b8e4-d83ce35098b3\",\"displayName\":\"Filament\\\\Notifications\\\\DatabaseNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:1;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:43:\\\"Filament\\\\Notifications\\\\DatabaseNotification\\\":2:{s:4:\\\"data\\\";a:11:{s:7:\\\"actions\\\";a:1:{i:0;a:22:{s:4:\\\"name\\\";s:13:\\\"download_xlsx\\\";s:5:\\\"color\\\";N;s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";E:42:\\\"Filament\\\\Support\\\\Enums\\\\IconPosition:Before\\\";s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:14:\\\"Download .xlsx\\\";s:11:\\\"shouldClose\\\";b:0;s:16:\\\"shouldMarkAsRead\\\";b:1;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:1;s:15:\\\"shouldPostToUrl\\\";b:0;s:4:\\\"size\\\";E:33:\\\"Filament\\\\Support\\\\Enums\\\\Size:Small\\\";s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";s:129:\\\"\\/filament\\/exports\\/2\\/download?authGuard=web&format=xlsx&signature=d97b5eef153c3c0273edaafc64619b7f748375422a1159094e8992c7a485c146\\\";s:4:\\\"view\\\";s:25:\\\"filament::components.link\\\";}}s:4:\\\"body\\\";s:67:\\\"Your product transaction export has completed and 11 rows exported.\\\";s:5:\\\"color\\\";N;s:8:\\\"duration\\\";s:10:\\\"persistent\\\";s:4:\\\"icon\\\";s:23:\\\"heroicon-o-check-circle\\\";s:9:\\\"iconColor\\\";s:7:\\\"success\\\";s:6:\\\"status\\\";s:7:\\\"success\\\";s:5:\\\"title\\\";s:16:\\\"Export completed\\\";s:4:\\\"view\\\";N;s:8:\\\"viewData\\\";a:0:{}s:6:\\\"format\\\";s:8:\\\"filament\\\";}s:2:\\\"id\\\";s:36:\\\"cc6c61a3-94e9-45de-90de-e9431a50ed4f\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}}\"},\"createdAt\":1758879415,\"delay\":null}', 'PDOException: SQLSTATE[42S02]: Base table or view not found: 1146 Table \'sepatuku.notifications\' doesn\'t exist in C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\MySqlConnection.php:47\nStack trace:\n#0 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\MySqlConnection.php(47): PDO->prepare(\'insert into `no...\')\n#1 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(811): Illuminate\\Database\\MySqlConnection->Illuminate\\Database\\{closure}(\'insert into `no...\', Array)\n#2 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(778): Illuminate\\Database\\Connection->runQueryCallback(\'insert into `no...\', Array, Object(Closure))\n#3 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\MySqlConnection.php(42): Illuminate\\Database\\Connection->run(\'insert into `no...\', Array, Object(Closure))\n#4 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php(3804): Illuminate\\Database\\MySqlConnection->insert(\'insert into `no...\', Array)\n#5 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(2220): Illuminate\\Database\\Query\\Builder->insert(Array)\n#6 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Model.php(1410): Illuminate\\Database\\Eloquent\\Builder->__call(\'insert\', Array)\n#7 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Model.php(1238): Illuminate\\Database\\Eloquent\\Model->performInsert(Object(Illuminate\\Database\\Eloquent\\Builder))\n#8 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany.php(370): Illuminate\\Database\\Eloquent\\Model->save()\n#9 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\helpers.php(399): Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany->Illuminate\\Database\\Eloquent\\Relations\\{closure}(Object(Illuminate\\Notifications\\DatabaseNotification))\n#10 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany.php(367): tap(Object(Illuminate\\Notifications\\DatabaseNotification), Object(Closure))\n#11 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\Channels\\DatabaseChannel.php(19): Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany->create(Array)\n#12 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\NotificationSender.php(163): Illuminate\\Notifications\\Channels\\DatabaseChannel->send(Object(App\\Models\\User), Object(Filament\\Notifications\\DatabaseNotification))\n#13 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\NotificationSender.php(118): Illuminate\\Notifications\\NotificationSender->sendToNotifiable(Object(App\\Models\\User), \'4a4e8d17-1977-4...\', Object(Filament\\Notifications\\DatabaseNotification), \'database\')\n#14 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\Localizable.php(19): Illuminate\\Notifications\\NotificationSender->Illuminate\\Notifications\\{closure}()\n#15 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\NotificationSender.php(113): Illuminate\\Notifications\\NotificationSender->withLocale(NULL, Object(Closure))\n#16 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\ChannelManager.php(54): Illuminate\\Notifications\\NotificationSender->sendNow(Object(Illuminate\\Database\\Eloquent\\Collection), Object(Filament\\Notifications\\DatabaseNotification), Array)\n#17 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\SendQueuedNotifications.php(118): Illuminate\\Notifications\\ChannelManager->sendNow(Object(Illuminate\\Database\\Eloquent\\Collection), Object(Filament\\Notifications\\DatabaseNotification), Array)\n#18 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Notifications\\SendQueuedNotifications->handle(Object(Illuminate\\Notifications\\ChannelManager))\n#19 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(43): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#20 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(96): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#21 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#22 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(835): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#23 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Container\\Container->call(Array)\n#24 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#25 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(137): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#26 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(136): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#27 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(134): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Notifications\\SendQueuedNotifications), false)\n#28 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#29 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(137): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#30 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(127): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#31 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(68): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#32 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#33 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(444): Illuminate\\Queue\\Jobs\\Job->fire()\n#34 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(394): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#35 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(180): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#36 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(148): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#37 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(131): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#38 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#39 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(43): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#40 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(96): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#41 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#42 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(835): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#43 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#44 C:\\xampp\\htdocs\\sepatuku\\vendor\\symfony\\console\\Command\\Command.php(318): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#45 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#46 C:\\xampp\\htdocs\\sepatuku\\vendor\\symfony\\console\\Application.php(1092): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#47 C:\\xampp\\htdocs\\sepatuku\\vendor\\symfony\\console\\Application.php(341): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#48 C:\\xampp\\htdocs\\sepatuku\\vendor\\symfony\\console\\Application.php(192): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#49 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(197): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#50 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1234): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#51 C:\\xampp\\htdocs\\sepatuku\\artisan(16): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#52 {main}\n\nNext Illuminate\\Database\\QueryException: SQLSTATE[42S02]: Base table or view not found: 1146 Table \'sepatuku.notifications\' doesn\'t exist (Connection: mysql, SQL: insert into `notifications` (`id`, `type`, `data`, `read_at`, `notifiable_id`, `notifiable_type`, `updated_at`, `created_at`) values (cc6c61a3-94e9-45de-90de-e9431a50ed4f, Filament\\Notifications\\DatabaseNotification, {\"actions\":[{\"name\":\"download_xlsx\",\"color\":null,\"event\":null,\"eventData\":[],\"dispatchDirection\":false,\"dispatchToComponent\":null,\"extraAttributes\":[],\"icon\":null,\"iconPosition\":\"before\",\"iconSize\":null,\"isOutlined\":false,\"isDisabled\":false,\"label\":\"Download .xlsx\",\"shouldClose\":false,\"shouldMarkAsRead\":true,\"shouldMarkAsUnread\":false,\"shouldOpenUrlInNewTab\":true,\"shouldPostToUrl\":false,\"size\":\"sm\",\"tooltip\":null,\"url\":\"\\/filament\\/exports\\/2\\/download?authGuard=web&format=xlsx&signature=d97b5eef153c3c0273edaafc64619b7f748375422a1159094e8992c7a485c146\",\"view\":\"filament::components.link\"}],\"body\":\"Your product transaction export has completed and 11 rows exported.\",\"color\":null,\"duration\":\"persistent\",\"icon\":\"heroicon-o-check-circle\",\"iconColor\":\"success\",\"status\":\"success\",\"title\":\"Export completed\",\"view\":null,\"viewData\":[],\"format\":\"filament\"}, ?, 1, App\\Models\\User, 2025-09-26 09:36:55, 2025-09-26 09:36:55)) in C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php:824\nStack trace:\n#0 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(778): Illuminate\\Database\\Connection->runQueryCallback(\'insert into `no...\', Array, Object(Closure))\n#1 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\MySqlConnection.php(42): Illuminate\\Database\\Connection->run(\'insert into `no...\', Array, Object(Closure))\n#2 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php(3804): Illuminate\\Database\\MySqlConnection->insert(\'insert into `no...\', Array)\n#3 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(2220): Illuminate\\Database\\Query\\Builder->insert(Array)\n#4 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Model.php(1410): Illuminate\\Database\\Eloquent\\Builder->__call(\'insert\', Array)\n#5 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Model.php(1238): Illuminate\\Database\\Eloquent\\Model->performInsert(Object(Illuminate\\Database\\Eloquent\\Builder))\n#6 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany.php(370): Illuminate\\Database\\Eloquent\\Model->save()\n#7 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\helpers.php(399): Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany->Illuminate\\Database\\Eloquent\\Relations\\{closure}(Object(Illuminate\\Notifications\\DatabaseNotification))\n#8 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany.php(367): tap(Object(Illuminate\\Notifications\\DatabaseNotification), Object(Closure))\n#9 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\Channels\\DatabaseChannel.php(19): Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany->create(Array)\n#10 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\NotificationSender.php(163): Illuminate\\Notifications\\Channels\\DatabaseChannel->send(Object(App\\Models\\User), Object(Filament\\Notifications\\DatabaseNotification))\n#11 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\NotificationSender.php(118): Illuminate\\Notifications\\NotificationSender->sendToNotifiable(Object(App\\Models\\User), \'4a4e8d17-1977-4...\', Object(Filament\\Notifications\\DatabaseNotification), \'database\')\n#12 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\Localizable.php(19): Illuminate\\Notifications\\NotificationSender->Illuminate\\Notifications\\{closure}()\n#13 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\NotificationSender.php(113): Illuminate\\Notifications\\NotificationSender->withLocale(NULL, Object(Closure))\n#14 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\ChannelManager.php(54): Illuminate\\Notifications\\NotificationSender->sendNow(Object(Illuminate\\Database\\Eloquent\\Collection), Object(Filament\\Notifications\\DatabaseNotification), Array)\n#15 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\SendQueuedNotifications.php(118): Illuminate\\Notifications\\ChannelManager->sendNow(Object(Illuminate\\Database\\Eloquent\\Collection), Object(Filament\\Notifications\\DatabaseNotification), Array)\n#16 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Notifications\\SendQueuedNotifications->handle(Object(Illuminate\\Notifications\\ChannelManager))\n#17 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(43): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#18 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(96): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#19 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#20 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(835): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#21 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Container\\Container->call(Array)\n#22 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#23 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(137): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#24 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(136): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#25 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(134): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Notifications\\SendQueuedNotifications), false)\n#26 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#27 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(137): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#28 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(127): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#29 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(68): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#30 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#31 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(444): Illuminate\\Queue\\Jobs\\Job->fire()\n#32 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(394): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#33 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(180): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#34 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(148): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#35 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(131): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#36 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#37 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(43): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#38 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(96): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#39 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#40 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(835): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#41 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#42 C:\\xampp\\htdocs\\sepatuku\\vendor\\symfony\\console\\Command\\Command.php(318): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#43 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#44 C:\\xampp\\htdocs\\sepatuku\\vendor\\symfony\\console\\Application.php(1092): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#45 C:\\xampp\\htdocs\\sepatuku\\vendor\\symfony\\console\\Application.php(341): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#46 C:\\xampp\\htdocs\\sepatuku\\vendor\\symfony\\console\\Application.php(192): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#47 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(197): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#48 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1234): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#49 C:\\xampp\\htdocs\\sepatuku\\artisan(16): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#50 {main}', '2025-09-26 02:36:55');
INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(3, '7fc563da-af32-4612-9fda-1c14a2e50c88', 'database', 'default', '{\"uuid\":\"7fc563da-af32-4612-9fda-1c14a2e50c88\",\"displayName\":\"Filament\\\\Notifications\\\\DatabaseNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:1;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:43:\\\"Filament\\\\Notifications\\\\DatabaseNotification\\\":2:{s:4:\\\"data\\\";a:11:{s:7:\\\"actions\\\";a:1:{i:0;a:22:{s:4:\\\"name\\\";s:13:\\\"download_xlsx\\\";s:5:\\\"color\\\";N;s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";E:42:\\\"Filament\\\\Support\\\\Enums\\\\IconPosition:Before\\\";s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:14:\\\"Download .xlsx\\\";s:11:\\\"shouldClose\\\";b:0;s:16:\\\"shouldMarkAsRead\\\";b:1;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:1;s:15:\\\"shouldPostToUrl\\\";b:0;s:4:\\\"size\\\";E:33:\\\"Filament\\\\Support\\\\Enums\\\\Size:Small\\\";s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";s:129:\\\"\\/filament\\/exports\\/3\\/download?authGuard=web&format=xlsx&signature=0096794cc092aa3c4fdcebc308345cba7688b12337251600af4f2ba77de50666\\\";s:4:\\\"view\\\";s:25:\\\"filament::components.link\\\";}}s:4:\\\"body\\\";s:67:\\\"Your product transaction export has completed and 11 rows exported.\\\";s:5:\\\"color\\\";N;s:8:\\\"duration\\\";s:10:\\\"persistent\\\";s:4:\\\"icon\\\";s:23:\\\"heroicon-o-check-circle\\\";s:9:\\\"iconColor\\\";s:7:\\\"success\\\";s:6:\\\"status\\\";s:7:\\\"success\\\";s:5:\\\"title\\\";s:16:\\\"Export completed\\\";s:4:\\\"view\\\";N;s:8:\\\"viewData\\\";a:0:{}s:6:\\\"format\\\";s:8:\\\"filament\\\";}s:2:\\\"id\\\";s:36:\\\"bd05c082-fb69-4d6e-ab82-eee813b4648c\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}}\"},\"createdAt\":1758879605,\"delay\":null}', 'PDOException: SQLSTATE[42S02]: Base table or view not found: 1146 Table \'sepatuku.notifications\' doesn\'t exist in C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\MySqlConnection.php:47\nStack trace:\n#0 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\MySqlConnection.php(47): PDO->prepare(\'insert into `no...\')\n#1 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(811): Illuminate\\Database\\MySqlConnection->Illuminate\\Database\\{closure}(\'insert into `no...\', Array)\n#2 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(778): Illuminate\\Database\\Connection->runQueryCallback(\'insert into `no...\', Array, Object(Closure))\n#3 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\MySqlConnection.php(42): Illuminate\\Database\\Connection->run(\'insert into `no...\', Array, Object(Closure))\n#4 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php(3804): Illuminate\\Database\\MySqlConnection->insert(\'insert into `no...\', Array)\n#5 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(2220): Illuminate\\Database\\Query\\Builder->insert(Array)\n#6 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Model.php(1410): Illuminate\\Database\\Eloquent\\Builder->__call(\'insert\', Array)\n#7 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Model.php(1238): Illuminate\\Database\\Eloquent\\Model->performInsert(Object(Illuminate\\Database\\Eloquent\\Builder))\n#8 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany.php(370): Illuminate\\Database\\Eloquent\\Model->save()\n#9 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\helpers.php(399): Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany->Illuminate\\Database\\Eloquent\\Relations\\{closure}(Object(Illuminate\\Notifications\\DatabaseNotification))\n#10 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany.php(367): tap(Object(Illuminate\\Notifications\\DatabaseNotification), Object(Closure))\n#11 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\Channels\\DatabaseChannel.php(19): Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany->create(Array)\n#12 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\NotificationSender.php(163): Illuminate\\Notifications\\Channels\\DatabaseChannel->send(Object(App\\Models\\User), Object(Filament\\Notifications\\DatabaseNotification))\n#13 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\NotificationSender.php(118): Illuminate\\Notifications\\NotificationSender->sendToNotifiable(Object(App\\Models\\User), \'f4ba0fdd-35a1-4...\', Object(Filament\\Notifications\\DatabaseNotification), \'database\')\n#14 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\Localizable.php(19): Illuminate\\Notifications\\NotificationSender->Illuminate\\Notifications\\{closure}()\n#15 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\NotificationSender.php(113): Illuminate\\Notifications\\NotificationSender->withLocale(NULL, Object(Closure))\n#16 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\ChannelManager.php(54): Illuminate\\Notifications\\NotificationSender->sendNow(Object(Illuminate\\Database\\Eloquent\\Collection), Object(Filament\\Notifications\\DatabaseNotification), Array)\n#17 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\SendQueuedNotifications.php(118): Illuminate\\Notifications\\ChannelManager->sendNow(Object(Illuminate\\Database\\Eloquent\\Collection), Object(Filament\\Notifications\\DatabaseNotification), Array)\n#18 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Notifications\\SendQueuedNotifications->handle(Object(Illuminate\\Notifications\\ChannelManager))\n#19 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(43): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#20 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(96): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#21 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#22 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(835): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#23 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Container\\Container->call(Array)\n#24 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#25 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(137): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#26 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(136): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#27 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(134): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Notifications\\SendQueuedNotifications), false)\n#28 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#29 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(137): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#30 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(127): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#31 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(68): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#32 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#33 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(444): Illuminate\\Queue\\Jobs\\Job->fire()\n#34 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(394): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#35 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(180): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#36 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(148): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#37 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(131): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#38 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#39 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(43): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#40 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(96): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#41 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#42 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(835): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#43 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#44 C:\\xampp\\htdocs\\sepatuku\\vendor\\symfony\\console\\Command\\Command.php(318): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#45 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#46 C:\\xampp\\htdocs\\sepatuku\\vendor\\symfony\\console\\Application.php(1092): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#47 C:\\xampp\\htdocs\\sepatuku\\vendor\\symfony\\console\\Application.php(341): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#48 C:\\xampp\\htdocs\\sepatuku\\vendor\\symfony\\console\\Application.php(192): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#49 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(197): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#50 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1234): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#51 C:\\xampp\\htdocs\\sepatuku\\artisan(16): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#52 {main}\n\nNext Illuminate\\Database\\QueryException: SQLSTATE[42S02]: Base table or view not found: 1146 Table \'sepatuku.notifications\' doesn\'t exist (Connection: mysql, SQL: insert into `notifications` (`id`, `type`, `data`, `read_at`, `notifiable_id`, `notifiable_type`, `updated_at`, `created_at`) values (bd05c082-fb69-4d6e-ab82-eee813b4648c, Filament\\Notifications\\DatabaseNotification, {\"actions\":[{\"name\":\"download_xlsx\",\"color\":null,\"event\":null,\"eventData\":[],\"dispatchDirection\":false,\"dispatchToComponent\":null,\"extraAttributes\":[],\"icon\":null,\"iconPosition\":\"before\",\"iconSize\":null,\"isOutlined\":false,\"isDisabled\":false,\"label\":\"Download .xlsx\",\"shouldClose\":false,\"shouldMarkAsRead\":true,\"shouldMarkAsUnread\":false,\"shouldOpenUrlInNewTab\":true,\"shouldPostToUrl\":false,\"size\":\"sm\",\"tooltip\":null,\"url\":\"\\/filament\\/exports\\/3\\/download?authGuard=web&format=xlsx&signature=0096794cc092aa3c4fdcebc308345cba7688b12337251600af4f2ba77de50666\",\"view\":\"filament::components.link\"}],\"body\":\"Your product transaction export has completed and 11 rows exported.\",\"color\":null,\"duration\":\"persistent\",\"icon\":\"heroicon-o-check-circle\",\"iconColor\":\"success\",\"status\":\"success\",\"title\":\"Export completed\",\"view\":null,\"viewData\":[],\"format\":\"filament\"}, ?, 1, App\\Models\\User, 2025-09-26 09:40:05, 2025-09-26 09:40:05)) in C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php:824\nStack trace:\n#0 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(778): Illuminate\\Database\\Connection->runQueryCallback(\'insert into `no...\', Array, Object(Closure))\n#1 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\MySqlConnection.php(42): Illuminate\\Database\\Connection->run(\'insert into `no...\', Array, Object(Closure))\n#2 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php(3804): Illuminate\\Database\\MySqlConnection->insert(\'insert into `no...\', Array)\n#3 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(2220): Illuminate\\Database\\Query\\Builder->insert(Array)\n#4 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Model.php(1410): Illuminate\\Database\\Eloquent\\Builder->__call(\'insert\', Array)\n#5 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Model.php(1238): Illuminate\\Database\\Eloquent\\Model->performInsert(Object(Illuminate\\Database\\Eloquent\\Builder))\n#6 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany.php(370): Illuminate\\Database\\Eloquent\\Model->save()\n#7 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\helpers.php(399): Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany->Illuminate\\Database\\Eloquent\\Relations\\{closure}(Object(Illuminate\\Notifications\\DatabaseNotification))\n#8 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany.php(367): tap(Object(Illuminate\\Notifications\\DatabaseNotification), Object(Closure))\n#9 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\Channels\\DatabaseChannel.php(19): Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany->create(Array)\n#10 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\NotificationSender.php(163): Illuminate\\Notifications\\Channels\\DatabaseChannel->send(Object(App\\Models\\User), Object(Filament\\Notifications\\DatabaseNotification))\n#11 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\NotificationSender.php(118): Illuminate\\Notifications\\NotificationSender->sendToNotifiable(Object(App\\Models\\User), \'f4ba0fdd-35a1-4...\', Object(Filament\\Notifications\\DatabaseNotification), \'database\')\n#12 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\Localizable.php(19): Illuminate\\Notifications\\NotificationSender->Illuminate\\Notifications\\{closure}()\n#13 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\NotificationSender.php(113): Illuminate\\Notifications\\NotificationSender->withLocale(NULL, Object(Closure))\n#14 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\ChannelManager.php(54): Illuminate\\Notifications\\NotificationSender->sendNow(Object(Illuminate\\Database\\Eloquent\\Collection), Object(Filament\\Notifications\\DatabaseNotification), Array)\n#15 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\SendQueuedNotifications.php(118): Illuminate\\Notifications\\ChannelManager->sendNow(Object(Illuminate\\Database\\Eloquent\\Collection), Object(Filament\\Notifications\\DatabaseNotification), Array)\n#16 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Notifications\\SendQueuedNotifications->handle(Object(Illuminate\\Notifications\\ChannelManager))\n#17 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(43): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#18 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(96): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#19 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#20 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(835): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#21 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Container\\Container->call(Array)\n#22 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#23 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(137): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#24 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(136): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#25 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(134): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Notifications\\SendQueuedNotifications), false)\n#26 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#27 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(137): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#28 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(127): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#29 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(68): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#30 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#31 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(444): Illuminate\\Queue\\Jobs\\Job->fire()\n#32 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(394): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#33 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(180): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#34 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(148): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#35 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(131): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#36 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#37 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(43): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#38 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(96): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#39 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#40 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(835): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#41 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#42 C:\\xampp\\htdocs\\sepatuku\\vendor\\symfony\\console\\Command\\Command.php(318): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#43 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#44 C:\\xampp\\htdocs\\sepatuku\\vendor\\symfony\\console\\Application.php(1092): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#45 C:\\xampp\\htdocs\\sepatuku\\vendor\\symfony\\console\\Application.php(341): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#46 C:\\xampp\\htdocs\\sepatuku\\vendor\\symfony\\console\\Application.php(192): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#47 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(197): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#48 C:\\xampp\\htdocs\\sepatuku\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1234): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#49 C:\\xampp\\htdocs\\sepatuku\\artisan(16): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#50 {main}', '2025-09-26 02:40:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `imports`
--

CREATE TABLE `imports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `completed_at` timestamp NULL DEFAULT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `importer` varchar(255) NOT NULL,
  `processed_rows` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `total_rows` int(10) UNSIGNED NOT NULL,
  `successful_rows` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `job_batches`
--

INSERT INTO `job_batches` (`id`, `name`, `total_jobs`, `pending_jobs`, `failed_jobs`, `failed_job_ids`, `options`, `cancelled_at`, `created_at`, `finished_at`) VALUES
('9ff81a45-0334-4d63-8d3a-f637416452ca', '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:7692:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":8:{s:11:\"\0*\0exporter\";O:47:\"App\\Filament\\Exports\\ProductTransactionExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":33:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:47:\"App\\Filament\\Exports\\ProductTransactionExporter\";s:10:\"total_rows\";i:11;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-09-26 08:51:00\";s:10:\"created_at\";s:19:\"2025-09-26 08:51:00\";s:2:\"id\";i:1;s:9:\"file_name\";s:29:\"export-1-product-transactions\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:47:\"App\\Filament\\Exports\\ProductTransactionExporter\";s:10:\"total_rows\";i:11;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-09-26 08:51:00\";s:10:\"created_at\";s:19:\"2025-09-26 08:51:00\";s:2:\"id\";i:1;s:9:\"file_name\";s:29:\"export-1-product-transactions\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:29:\"export-1-product-transactions\";}s:11:\"\0*\0previous\";a:0:{}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:27:\"\0*\0relationAutoloadCallback\";N;s:26:\"\0*\0relationAutoloadContext\";N;s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:20:{s:2:\"id\";s:2:\"ID\";s:4:\"name\";s:4:\"Name\";s:5:\"phone\";s:5:\"Phone\";s:5:\"email\";s:5:\"Email\";s:14:\"booking_trx_id\";s:14:\"Booking trx id\";s:4:\"city\";s:4:\"City\";s:9:\"post_code\";s:9:\"Post code\";s:5:\"proof\";s:5:\"Proof\";s:9:\"shoe_size\";s:9:\"Shoe size\";s:7:\"address\";s:7:\"Address\";s:8:\"quantity\";s:8:\"Quantity\";s:16:\"sub_total_amount\";s:16:\"Sub total amount\";s:18:\"grand_total_amount\";s:18:\"Grand total amount\";s:15:\"discount_amount\";s:15:\"Discount amount\";s:7:\"is_paid\";s:7:\"Is paid\";s:9:\"shoe.name\";s:4:\"Shoe\";s:12:\"promoCode.id\";s:10:\"Promo code\";s:10:\"deleted_at\";s:10:\"Deleted at\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:1;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:20:{s:2:\"id\";s:2:\"ID\";s:4:\"name\";s:4:\"Name\";s:5:\"phone\";s:5:\"Phone\";s:5:\"email\";s:5:\"Email\";s:14:\"booking_trx_id\";s:14:\"Booking trx id\";s:4:\"city\";s:4:\"City\";s:9:\"post_code\";s:9:\"Post code\";s:5:\"proof\";s:5:\"Proof\";s:9:\"shoe_size\";s:9:\"Shoe size\";s:7:\"address\";s:7:\"Address\";s:8:\"quantity\";s:8:\"Quantity\";s:16:\"sub_total_amount\";s:16:\"Sub total amount\";s:18:\"grand_total_amount\";s:18:\"Grand total amount\";s:15:\"discount_amount\";s:15:\"Discount amount\";s:7:\"is_paid\";s:7:\"Is paid\";s:9:\"shoe.name\";s:4:\"Shoe\";s:12:\"promoCode.id\";s:10:\"Promo code\";s:10:\"deleted_at\";s:10:\"Deleted at\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:12:\"\0*\0authGuard\";s:3:\"web\";s:7:\"chained\";a:1:{i:0;s:3482:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:47:\"App\\Filament\\Exports\\ProductTransactionExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":33:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:47:\"App\\Filament\\Exports\\ProductTransactionExporter\";s:10:\"total_rows\";i:11;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-09-26 08:51:00\";s:10:\"created_at\";s:19:\"2025-09-26 08:51:00\";s:2:\"id\";i:1;s:9:\"file_name\";s:29:\"export-1-product-transactions\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:47:\"App\\Filament\\Exports\\ProductTransactionExporter\";s:10:\"total_rows\";i:11;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-09-26 08:51:00\";s:10:\"created_at\";s:19:\"2025-09-26 08:51:00\";s:2:\"id\";i:1;s:9:\"file_name\";s:29:\"export-1-product-transactions\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:29:\"export-1-product-transactions\";}s:11:\"\0*\0previous\";a:0:{}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:27:\"\0*\0relationAutoloadCallback\";N;s:26:\"\0*\0relationAutoloadContext\";N;s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:20:{s:2:\"id\";s:2:\"ID\";s:4:\"name\";s:4:\"Name\";s:5:\"phone\";s:5:\"Phone\";s:5:\"email\";s:5:\"Email\";s:14:\"booking_trx_id\";s:14:\"Booking trx id\";s:4:\"city\";s:4:\"City\";s:9:\"post_code\";s:9:\"Post code\";s:5:\"proof\";s:5:\"Proof\";s:9:\"shoe_size\";s:9:\"Shoe size\";s:7:\"address\";s:7:\"Address\";s:8:\"quantity\";s:8:\"Quantity\";s:16:\"sub_total_amount\";s:16:\"Sub total amount\";s:18:\"grand_total_amount\";s:18:\"Grand total amount\";s:15:\"discount_amount\";s:15:\"Discount amount\";s:7:\"is_paid\";s:7:\"Is paid\";s:9:\"shoe.name\";s:4:\"Shoe\";s:12:\"promoCode.id\";s:10:\"Promo code\";s:10:\"deleted_at\";s:10:\"Deleted at\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:1;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:20:{s:2:\"id\";s:2:\"ID\";s:4:\"name\";s:4:\"Name\";s:5:\"phone\";s:5:\"Phone\";s:5:\"email\";s:5:\"Email\";s:14:\"booking_trx_id\";s:14:\"Booking trx id\";s:4:\"city\";s:4:\"City\";s:9:\"post_code\";s:9:\"Post code\";s:5:\"proof\";s:5:\"Proof\";s:9:\"shoe_size\";s:9:\"Shoe size\";s:7:\"address\";s:7:\"Address\";s:8:\"quantity\";s:8:\"Quantity\";s:16:\"sub_total_amount\";s:16:\"Sub total amount\";s:18:\"grand_total_amount\";s:18:\"Grand total amount\";s:15:\"discount_amount\";s:15:\"Discount amount\";s:7:\"is_paid\";s:7:\"Is paid\";s:9:\"shoe.name\";s:4:\"Shoe\";s:12:\"promoCode.id\";s:10:\"Promo code\";s:10:\"deleted_at\";s:10:\"Deleted at\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009630000000000000000\";}\";s:4:\"hash\";s:44:\"EoYAPYnCA8QV95++LpfHUZG/rMF/3i9dySMMmEBrYxg=\";}}}}', NULL, 1758879414, 1758879414),
('9ff81a45-2226-4581-989a-9676216d0038', '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:7633:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":6:{s:11:\"\0*\0exporter\";O:47:\"App\\Filament\\Exports\\ProductTransactionExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":33:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:47:\"App\\Filament\\Exports\\ProductTransactionExporter\";s:10:\"total_rows\";i:11;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-09-26 09:31:09\";s:10:\"created_at\";s:19:\"2025-09-26 09:31:09\";s:2:\"id\";i:2;s:9:\"file_name\";s:29:\"export-2-product-transactions\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:47:\"App\\Filament\\Exports\\ProductTransactionExporter\";s:10:\"total_rows\";i:11;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-09-26 09:31:09\";s:10:\"created_at\";s:19:\"2025-09-26 09:31:09\";s:2:\"id\";i:2;s:9:\"file_name\";s:29:\"export-2-product-transactions\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:29:\"export-2-product-transactions\";}s:11:\"\0*\0previous\";a:0:{}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:27:\"\0*\0relationAutoloadCallback\";N;s:26:\"\0*\0relationAutoloadContext\";N;s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:20:{s:2:\"id\";s:2:\"ID\";s:4:\"name\";s:4:\"Name\";s:5:\"phone\";s:5:\"Phone\";s:5:\"email\";s:5:\"Email\";s:14:\"booking_trx_id\";s:14:\"Booking trx id\";s:4:\"city\";s:4:\"City\";s:9:\"post_code\";s:9:\"Post code\";s:5:\"proof\";s:5:\"Proof\";s:9:\"shoe_size\";s:9:\"Shoe size\";s:7:\"address\";s:7:\"Address\";s:8:\"quantity\";s:8:\"Quantity\";s:16:\"sub_total_amount\";s:16:\"Sub total amount\";s:18:\"grand_total_amount\";s:18:\"Grand total amount\";s:15:\"discount_amount\";s:15:\"Discount amount\";s:7:\"is_paid\";s:7:\"Is paid\";s:9:\"shoe.name\";s:4:\"Shoe\";s:12:\"promoCode.id\";s:10:\"Promo code\";s:10:\"deleted_at\";s:10:\"Deleted at\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:2;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:20:{s:2:\"id\";s:2:\"ID\";s:4:\"name\";s:4:\"Name\";s:5:\"phone\";s:5:\"Phone\";s:5:\"email\";s:5:\"Email\";s:14:\"booking_trx_id\";s:14:\"Booking trx id\";s:4:\"city\";s:4:\"City\";s:9:\"post_code\";s:9:\"Post code\";s:5:\"proof\";s:5:\"Proof\";s:9:\"shoe_size\";s:9:\"Shoe size\";s:7:\"address\";s:7:\"Address\";s:8:\"quantity\";s:8:\"Quantity\";s:16:\"sub_total_amount\";s:16:\"Sub total amount\";s:18:\"grand_total_amount\";s:18:\"Grand total amount\";s:15:\"discount_amount\";s:15:\"Discount amount\";s:7:\"is_paid\";s:7:\"Is paid\";s:9:\"shoe.name\";s:4:\"Shoe\";s:12:\"promoCode.id\";s:10:\"Promo code\";s:10:\"deleted_at\";s:10:\"Deleted at\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:3598:\"O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":6:{s:11:\"\0*\0exporter\";O:47:\"App\\Filament\\Exports\\ProductTransactionExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":33:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:47:\"App\\Filament\\Exports\\ProductTransactionExporter\";s:10:\"total_rows\";i:11;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-09-26 09:31:09\";s:10:\"created_at\";s:19:\"2025-09-26 09:31:09\";s:2:\"id\";i:2;s:9:\"file_name\";s:29:\"export-2-product-transactions\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:47:\"App\\Filament\\Exports\\ProductTransactionExporter\";s:10:\"total_rows\";i:11;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-09-26 09:31:09\";s:10:\"created_at\";s:19:\"2025-09-26 09:31:09\";s:2:\"id\";i:2;s:9:\"file_name\";s:29:\"export-2-product-transactions\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:29:\"export-2-product-transactions\";}s:11:\"\0*\0previous\";a:0:{}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:27:\"\0*\0relationAutoloadCallback\";N;s:26:\"\0*\0relationAutoloadContext\";N;s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:20:{s:2:\"id\";s:2:\"ID\";s:4:\"name\";s:4:\"Name\";s:5:\"phone\";s:5:\"Phone\";s:5:\"email\";s:5:\"Email\";s:14:\"booking_trx_id\";s:14:\"Booking trx id\";s:4:\"city\";s:4:\"City\";s:9:\"post_code\";s:9:\"Post code\";s:5:\"proof\";s:5:\"Proof\";s:9:\"shoe_size\";s:9:\"Shoe size\";s:7:\"address\";s:7:\"Address\";s:8:\"quantity\";s:8:\"Quantity\";s:16:\"sub_total_amount\";s:16:\"Sub total amount\";s:18:\"grand_total_amount\";s:18:\"Grand total amount\";s:15:\"discount_amount\";s:15:\"Discount amount\";s:7:\"is_paid\";s:7:\"Is paid\";s:9:\"shoe.name\";s:4:\"Shoe\";s:12:\"promoCode.id\";s:10:\"Promo code\";s:10:\"deleted_at\";s:10:\"Deleted at\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:2;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:20:{s:2:\"id\";s:2:\"ID\";s:4:\"name\";s:4:\"Name\";s:5:\"phone\";s:5:\"Phone\";s:5:\"email\";s:5:\"Email\";s:14:\"booking_trx_id\";s:14:\"Booking trx id\";s:4:\"city\";s:4:\"City\";s:9:\"post_code\";s:9:\"Post code\";s:5:\"proof\";s:5:\"Proof\";s:9:\"shoe_size\";s:9:\"Shoe size\";s:7:\"address\";s:7:\"Address\";s:8:\"quantity\";s:8:\"Quantity\";s:16:\"sub_total_amount\";s:16:\"Sub total amount\";s:18:\"grand_total_amount\";s:18:\"Grand total amount\";s:15:\"discount_amount\";s:15:\"Discount amount\";s:7:\"is_paid\";s:7:\"Is paid\";s:9:\"shoe.name\";s:4:\"Shoe\";s:12:\"promoCode.id\";s:10:\"Promo code\";s:10:\"deleted_at\";s:10:\"Deleted at\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:1:{i:0;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:12:\"\0*\0authGuard\";s:3:\"web\";}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"000000000000094e0000000000000000\";}\";s:4:\"hash\";s:44:\"75W1FjbUQD8pmqbm+/3vSweJLTTzUYiz3p3wyko0EDw=\";}}}}', NULL, 1758879414, 1758879414),
('9ff81b67-f394-4f4d-be09-3cd24944fff2', '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:7633:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":6:{s:11:\"\0*\0exporter\";O:47:\"App\\Filament\\Exports\\ProductTransactionExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":33:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:47:\"App\\Filament\\Exports\\ProductTransactionExporter\";s:10:\"total_rows\";i:11;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-09-26 09:40:04\";s:10:\"created_at\";s:19:\"2025-09-26 09:40:04\";s:2:\"id\";i:3;s:9:\"file_name\";s:29:\"export-3-product-transactions\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:47:\"App\\Filament\\Exports\\ProductTransactionExporter\";s:10:\"total_rows\";i:11;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-09-26 09:40:04\";s:10:\"created_at\";s:19:\"2025-09-26 09:40:04\";s:2:\"id\";i:3;s:9:\"file_name\";s:29:\"export-3-product-transactions\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:29:\"export-3-product-transactions\";}s:11:\"\0*\0previous\";a:0:{}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:27:\"\0*\0relationAutoloadCallback\";N;s:26:\"\0*\0relationAutoloadContext\";N;s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:20:{s:2:\"id\";s:2:\"ID\";s:4:\"name\";s:4:\"Name\";s:5:\"phone\";s:5:\"Phone\";s:5:\"email\";s:5:\"Email\";s:14:\"booking_trx_id\";s:14:\"Booking trx id\";s:4:\"city\";s:4:\"City\";s:9:\"post_code\";s:9:\"Post code\";s:5:\"proof\";s:5:\"Proof\";s:9:\"shoe_size\";s:9:\"Shoe size\";s:7:\"address\";s:7:\"Address\";s:8:\"quantity\";s:8:\"Quantity\";s:16:\"sub_total_amount\";s:16:\"Sub total amount\";s:18:\"grand_total_amount\";s:18:\"Grand total amount\";s:15:\"discount_amount\";s:15:\"Discount amount\";s:7:\"is_paid\";s:7:\"Is paid\";s:9:\"shoe.name\";s:4:\"Shoe\";s:12:\"promoCode.id\";s:10:\"Promo code\";s:10:\"deleted_at\";s:10:\"Deleted at\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:3;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:20:{s:2:\"id\";s:2:\"ID\";s:4:\"name\";s:4:\"Name\";s:5:\"phone\";s:5:\"Phone\";s:5:\"email\";s:5:\"Email\";s:14:\"booking_trx_id\";s:14:\"Booking trx id\";s:4:\"city\";s:4:\"City\";s:9:\"post_code\";s:9:\"Post code\";s:5:\"proof\";s:5:\"Proof\";s:9:\"shoe_size\";s:9:\"Shoe size\";s:7:\"address\";s:7:\"Address\";s:8:\"quantity\";s:8:\"Quantity\";s:16:\"sub_total_amount\";s:16:\"Sub total amount\";s:18:\"grand_total_amount\";s:18:\"Grand total amount\";s:15:\"discount_amount\";s:15:\"Discount amount\";s:7:\"is_paid\";s:7:\"Is paid\";s:9:\"shoe.name\";s:4:\"Shoe\";s:12:\"promoCode.id\";s:10:\"Promo code\";s:10:\"deleted_at\";s:10:\"Deleted at\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:3598:\"O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":6:{s:11:\"\0*\0exporter\";O:47:\"App\\Filament\\Exports\\ProductTransactionExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":33:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:47:\"App\\Filament\\Exports\\ProductTransactionExporter\";s:10:\"total_rows\";i:11;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-09-26 09:40:04\";s:10:\"created_at\";s:19:\"2025-09-26 09:40:04\";s:2:\"id\";i:3;s:9:\"file_name\";s:29:\"export-3-product-transactions\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:47:\"App\\Filament\\Exports\\ProductTransactionExporter\";s:10:\"total_rows\";i:11;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-09-26 09:40:04\";s:10:\"created_at\";s:19:\"2025-09-26 09:40:04\";s:2:\"id\";i:3;s:9:\"file_name\";s:29:\"export-3-product-transactions\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:29:\"export-3-product-transactions\";}s:11:\"\0*\0previous\";a:0:{}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:27:\"\0*\0relationAutoloadCallback\";N;s:26:\"\0*\0relationAutoloadContext\";N;s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:20:{s:2:\"id\";s:2:\"ID\";s:4:\"name\";s:4:\"Name\";s:5:\"phone\";s:5:\"Phone\";s:5:\"email\";s:5:\"Email\";s:14:\"booking_trx_id\";s:14:\"Booking trx id\";s:4:\"city\";s:4:\"City\";s:9:\"post_code\";s:9:\"Post code\";s:5:\"proof\";s:5:\"Proof\";s:9:\"shoe_size\";s:9:\"Shoe size\";s:7:\"address\";s:7:\"Address\";s:8:\"quantity\";s:8:\"Quantity\";s:16:\"sub_total_amount\";s:16:\"Sub total amount\";s:18:\"grand_total_amount\";s:18:\"Grand total amount\";s:15:\"discount_amount\";s:15:\"Discount amount\";s:7:\"is_paid\";s:7:\"Is paid\";s:9:\"shoe.name\";s:4:\"Shoe\";s:12:\"promoCode.id\";s:10:\"Promo code\";s:10:\"deleted_at\";s:10:\"Deleted at\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:3;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:20:{s:2:\"id\";s:2:\"ID\";s:4:\"name\";s:4:\"Name\";s:5:\"phone\";s:5:\"Phone\";s:5:\"email\";s:5:\"Email\";s:14:\"booking_trx_id\";s:14:\"Booking trx id\";s:4:\"city\";s:4:\"City\";s:9:\"post_code\";s:9:\"Post code\";s:5:\"proof\";s:5:\"Proof\";s:9:\"shoe_size\";s:9:\"Shoe size\";s:7:\"address\";s:7:\"Address\";s:8:\"quantity\";s:8:\"Quantity\";s:16:\"sub_total_amount\";s:16:\"Sub total amount\";s:18:\"grand_total_amount\";s:18:\"Grand total amount\";s:15:\"discount_amount\";s:15:\"Discount amount\";s:7:\"is_paid\";s:7:\"Is paid\";s:9:\"shoe.name\";s:4:\"Shoe\";s:12:\"promoCode.id\";s:10:\"Promo code\";s:10:\"deleted_at\";s:10:\"Deleted at\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:1:{i:0;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:12:\"\0*\0authGuard\";s:3:\"web\";}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"0000000000000ccd0000000000000000\";}\";s:4:\"hash\";s:44:\"+JD34XsKYk5gDdGnEFRUG8fPgEtcGqPmjxsHELEf59w=\";}}}}', NULL, 1758879605, 1758879605);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_08_17_022108_create_categories_table', 1),
(5, '2025_08_17_022116_create_brands_table', 1),
(6, '2025_08_17_022123_create_shoes_table', 1),
(7, '2025_08_17_022135_create_shoe_photos_table', 1),
(8, '2025_08_17_022147_create_shoe_sizes_table', 1),
(9, '2025_08_17_022156_create_promo_codes_table', 1),
(10, '2025_08_17_022218_create_product_transactions_table', 1),
(11, '2025_09_26_085024_create_imports_table', 2),
(12, '2025_09_26_085025_create_exports_table', 2),
(13, '2025_09_26_085026_create_failed_import_rows_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_transactions`
--

CREATE TABLE `product_transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `booking_trx_id` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `post_code` varchar(255) NOT NULL,
  `proof` varchar(255) NOT NULL,
  `shoe_size` int(10) UNSIGNED NOT NULL,
  `address` text NOT NULL,
  `quantity` bigint(20) UNSIGNED NOT NULL,
  `sub_total_amount` bigint(20) UNSIGNED NOT NULL,
  `grand_total_amount` bigint(20) UNSIGNED NOT NULL,
  `discount_amount` bigint(20) UNSIGNED NOT NULL,
  `is_paid` tinyint(1) NOT NULL,
  `shoe_id` bigint(20) UNSIGNED NOT NULL,
  `promo_code_id` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product_transactions`
--

INSERT INTO `product_transactions` (`id`, `name`, `phone`, `email`, `booking_trx_id`, `city`, `post_code`, `proof`, `shoe_size`, `address`, `quantity`, `sub_total_amount`, `grand_total_amount`, `discount_amount`, `is_paid`, `shoe_id`, `promo_code_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'dadang', '085693051191', 'admin@admin.com', 'SSBWA7078', 'Tangerang', '15610', 'proofs/eDLKUVLd3NObD67O6Kin5ddxk1qKxlj1dunDifPX.jpg', 9, 'Balaraja, Tangerang', 1, 500000, 470000, 30000, 1, 6, 2, NULL, '2025-08-31 18:04:00', '2025-09-25 20:18:58'),
(3, 'dadang', '085693051191', 'admin@admin.com', 'SSBWA6622', 'Tangerang', '15610', 'proofs/2En4VVHur8B2pPpqDtNtyySxYMbvummglLKyV13z.jpg', 9, 'Balaraja, Tangerang', 1, 500000, 470000, 30000, 0, 6, 2, NULL, '2025-08-31 18:17:07', '2025-08-31 18:17:07'),
(4, 'dadang', '085693051191', 'admin@admin.com', 'SSBWA1578', 'Tangerang', '15610', 'proofs/q8BCmM8RVRGc8TTpAA6bsVA3VnpmwmUjrgifST6o.jpg', 12, 'Balaraja, Tangerang', 1, 400000, 400000, 0, 0, 7, NULL, NULL, '2025-08-31 18:17:52', '2025-08-31 18:17:52'),
(5, 'dadang', '085693051191', 'admin@admin.com', 'SSBWA8321', 'Tangerang', '15610', 'proofs/H7az6lwvqbZ8Ouci8yLTbfodViNVExIaHippaYJd.jpg', 16, 'Balaraja, Tangerang', 2, 600000, 570000, 30000, 0, 8, 2, NULL, '2025-08-31 20:45:58', '2025-08-31 20:45:58'),
(6, 'Cluster 1_24_20', '085693051191', 'anggara@esaunggul.ac.id', 'SSBWA3567', 'Tangerang', '15610', 'proofs/QV9QJ8jUOSYEHQk5N7cHhzfQAFnuwBYKcfNMJmCw.jpg', 16, 'Balaraja, Tangerang', 2, 600000, 570000, 30000, 0, 8, 2, NULL, '2025-09-02 23:26:46', '2025-09-02 23:26:46'),
(7, 'Cluster 4_9_5', '085693051191', 'admin@admin.com', 'SSBWA7842', 'Tangerang', '15610', 'proofs/rqFgMHdvHfIjyDAVBE1YK2GZify1y7rwGSL7D3j7.jpg', 12, 'Balaraja, Tangerang', 2, 800000, 800000, 0, 0, 7, NULL, NULL, '2025-09-03 17:09:57', '2025-09-03 17:09:57'),
(8, 'Cluster 4_9_5', '085693051191', 'user@react.test', 'SSBWA9523', 'Tangerang', '15610', 'proofs/cyrjFKUZl83WDv0zv1HmRuU9m6yfuu1mqaQ8QNMe.jpg', 14, 'Balaraja, Tangerang', 1, 400000, 400000, 0, 0, 7, NULL, NULL, '2025-09-25 01:43:27', '2025-09-25 01:43:27'),
(9, 'Cluster 1_24_20', '085693051191', 'm.bahrul_ulum@esaunggul.ac.id', 'SSBWA6717', 'Tangerang', '15610', 'proofs/fDThxsXD9l7waCQeU6qy5xCPGN7UyxbKUgFf26mS.png', 13, 'Balaraja, Tangerang', 1, 400000, 400000, 0, 0, 7, NULL, NULL, '2025-09-25 02:12:50', '2025-09-25 02:12:50'),
(10, 'Cluster 1_24_20', '085693051191', 'user@react.test', 'SSBWA8134', 'Tangerang', '15610', 'proofs/W3CNzID4MWaiCjNUzPy8J68ED9cyM9qXdgy0xsb1.png', 14, 'Balaraja, Tangerang', 1, 400000, 400000, 0, 0, 7, NULL, NULL, '2025-09-25 03:38:06', '2025-09-25 03:38:06'),
(11, 'Cluster 1_24_20', '085693051191', 'user@react.test', 'SSBWA3595', 'Tangerang', '15610', 'proofs/MYo3nPomEkdm4ckUmtV9Kig1TrvNaVu6KfpkBVBB.png', 14, 'Balaraja, Tangerang', 1, 400000, 400000, 0, 0, 7, NULL, '2025-09-25 20:20:12', '2025-09-25 05:59:40', '2025-09-25 20:20:12'),
(12, 'Cluster 2_19_15', '085693051191', 'anggara@esaunggul.ac.id', 'SSBWA1349', 'Tangerang', '15610', 'proofs/2WwhYxSEoDxfkRiP5fIXlHlY2tCki0vtZEw5uQKA.png', 13, 'Balaraja, Tangerang', 1, 400000, 400000, 0, 0, 7, NULL, NULL, '2025-09-25 06:05:07', '2025-09-25 06:05:07'),
(13, 'Cluster 2_19_15', '085693051191', 'anggara@esaunggul.ac.id', 'SSBWA7705', 'Tangerang', '15610', 'proofs/7bu438p1bMmaZ6T7QNmUP0xgOIcLYMn25YsEGTG2.png', 13, 'Balaraja, Tangerang', 1, 400000, 400000, 0, 0, 7, NULL, NULL, '2025-09-25 06:53:04', '2025-09-25 06:53:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `promo_codes`
--

CREATE TABLE `promo_codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `discount_amount` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `promo_codes`
--

INSERT INTO `promo_codes` (`id`, `code`, `discount_amount`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'GAJIAN', 30000, NULL, '2025-08-31 09:48:21', '2025-08-31 09:48:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('DCuGALwkWGatrwMyqFAHXFTA4dHY4nVvXbV8t0UA', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM29BMUtjbkRpZWhmU040Q1ZNcGRJUG1STFRHQTJmOTJlQXdDOTh5VSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kZXRhaWxzL2FkaWRhcy0yMDMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1764091716),
('DOWJNEoNRLQoiEIwQF9gffUKP0gJTIkWWUZnJpM4', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiVG9acVlHdW9TSG50ZE9CZEhWVWdrM1o0dkxvWDA0TXJEZHNnS21LbSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9wcm9kdWN0LXRyYW5zYWN0aW9ucyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMiR1SG9mZURLU0JOYjBzR2NrNXRIZmZ1OG1ndUlHNWZldXlzSTdXZEFqek1XY1hZZ3dpdDU5eSI7czo2OiJ0YWJsZXMiO2E6MTp7czo0MDoiYzhhMWNmYTU4Zjg5Nzg2MjUzZjQ1OTg2YzE5ZDljZDdfY29sdW1ucyI7YTo0OntpOjA7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTQ6InNob2UudGh1bWJuYWlsIjtzOjU6ImxhYmVsIjtzOjQ6IlNob2UiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjQ6Im5hbWUiO3M6NToibGFiZWwiO3M6NDoiTmFtZSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjI7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTQ6ImJvb2tpbmdfdHJ4X2lkIjtzOjU6ImxhYmVsIjtzOjE0OiJCb29raW5nIHRyeCBpZCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjM7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NzoiaXNfcGFpZCI7czo1OiJsYWJlbCI7czoxMzoiVGVydmVyaWZpa2FzaSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO319fXM6ODoiZmlsYW1lbnQiO2E6MDp7fX0=', 1758879613),
('kmj7wSryisr5P5n34ccn5youkuRw5WdM8cbx2Dtj', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiYjF5Tkh3dEJnVUpwbGYwVDJhRk1XYjBMUmNKVVIxZHZJN3UxRElKbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kZXRhaWxzL2FkaWRhcy0yMDMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEyJHVIb2ZlREtTQk5iMHNHY2s1dEhmZnU4bWd1SUc1ZmV1eXNJN1dkQWp6TVdjWFlnd2l0NTl5IjtzOjY6InRhYmxlcyI7YToyOntzOjQwOiI5NWFjNGNhMmQwMzRmZjM2YTFjMDdiMWVhNDM0ODBjOF9jb2x1bW5zIjthOjI6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo0OiJuYW1lIjtzOjU6ImxhYmVsIjtzOjQ6Ik5hbWUiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjQ6ImxvZ28iO3M6NToibGFiZWwiO3M6NDoiTG9nbyI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO319czo0MDoiZGRjMWQwOGViZWZhNjUyMjkwM2FiMWYzN2MzY2I4YWNfY29sdW1ucyI7YToyOntpOjA7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NDoibmFtZSI7czo1OiJsYWJlbCI7czo0OiJOYW1lIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo0OiJpY29uIjtzOjU6ImxhYmVsIjtzOjQ6Ikljb24iO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9fX19', 1763786051),
('zRLlWr6xjWFylttSZVNqczm6HqLMVBuXLNnqV9hr', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOE9zTXhVUkhuaGZkTVR6eDBPYW8wR3hoRmdvOVRlZnFjenhkT3h2aCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1764088178);

-- --------------------------------------------------------

--
-- Struktur dari tabel `shoes`
--

CREATE TABLE `shoes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `price` bigint(20) UNSIGNED NOT NULL,
  `stock` bigint(20) UNSIGNED NOT NULL,
  `is_popular` tinyint(1) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `shoes`
--

INSERT INTO `shoes` (`id`, `name`, `slug`, `thumbnail`, `about`, `price`, `stock`, `is_popular`, `category_id`, `brand_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(6, 'Adidas 203', 'adidas-203', '01K3MDT231W036J26TFYFK4FKX.jpg', 'Sepatu lari sporty dengan desain modern berwarna putih, hijau neon, dan biru ini memberikan kenyamanan ringan sekaligus gaya yang energik.', 500000, 5, 1, 12, 3, NULL, '2025-08-26 17:10:56', '2025-08-26 17:10:56'),
(7, 'Nike 7638', 'nike-7638', '01K3ME0F7BWV8939GSG28WP393.jpg', 'Sepatu lari sporty dengan desain modern berwarna putih, hijau neon, dan biru ini memberikan kenyamanan ringan sekaligus gaya yang energik.\n', 400000, 5, 1, 13, 4, NULL, '2025-08-26 17:14:26', '2025-08-26 17:14:26'),
(8, 'Geo 8988', 'geo-8988', '01K3ME3C1XXVD125C6Y5B9QGC5.jpg', 'Sepatu lari sporty dengan desain modern berwarna putih, hijau neon, dan biru ini memberikan kenyamanan ringan sekaligus gaya yang energik.\n', 300000, 5, 1, 11, 3, NULL, '2025-08-26 17:16:01', '2025-08-26 17:16:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `shoe_photos`
--

CREATE TABLE `shoe_photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) NOT NULL,
  `shoe_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `shoe_photos`
--

INSERT INTO `shoe_photos` (`id`, `photo`, `shoe_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(10, '01K3MDT235RMFHM90ERD26G2XT.jpg', 6, NULL, '2025-08-26 17:10:56', '2025-08-26 17:10:56'),
(11, '01K3MDT236JW3CDQJBR997RY5J.jpg', 6, NULL, '2025-08-26 17:10:56', '2025-08-26 17:10:56'),
(12, '01K3MDT23825HRBW6ZAZE1GWF5.jpg', 6, NULL, '2025-08-26 17:10:56', '2025-08-26 17:10:56'),
(13, '01K3MDT239DV5TMH12MTP5M11M.jpg', 6, NULL, '2025-08-26 17:10:56', '2025-08-26 17:10:56'),
(14, '01K3MDT23AMXG14J9PJ1N9AN2Y.jpg', 6, NULL, '2025-08-26 17:10:56', '2025-08-26 17:10:56'),
(15, '01K3ME0F7F4G1C13QYRAAQ350A.jpg', 7, NULL, '2025-08-26 17:14:26', '2025-08-26 17:14:26'),
(16, '01K3ME0F7HP155H3BTMGBVV8KV.jpg', 7, NULL, '2025-08-26 17:14:26', '2025-08-26 17:14:26'),
(17, '01K3ME0F7JKCNPPQ3QRWHT56MP.jpg', 7, NULL, '2025-08-26 17:14:26', '2025-08-26 17:14:26'),
(18, '01K3ME0F7KPNMGCZE77TN2PC0N.jpg', 7, NULL, '2025-08-26 17:14:26', '2025-08-26 17:14:26'),
(19, '01K3ME3C20HXV96XX27TRPPT8S.jpg', 8, NULL, '2025-08-26 17:16:01', '2025-08-26 17:16:01'),
(20, '01K3ME3C21TX2JS6V7S258HRYJ.jpg', 8, NULL, '2025-08-26 17:16:01', '2025-08-26 17:16:01'),
(21, '01K3ME3C22BN0P7990FYHQXFCT.jpg', 8, NULL, '2025-08-26 17:16:01', '2025-08-26 17:16:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `shoe_sizes`
--

CREATE TABLE `shoe_sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `size` varchar(255) NOT NULL,
  `shoe_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `shoe_sizes`
--

INSERT INTO `shoe_sizes` (`id`, `size`, `shoe_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(6, '41', 6, NULL, '2025-08-26 17:10:56', '2025-08-26 17:10:56'),
(7, '42', 6, NULL, '2025-08-26 17:10:56', '2025-08-26 17:10:56'),
(8, '43', 6, NULL, '2025-08-26 17:10:56', '2025-08-26 17:10:56'),
(9, '44', 6, NULL, '2025-08-26 17:10:56', '2025-08-26 17:10:56'),
(10, '45', 6, NULL, '2025-08-26 17:10:56', '2025-08-26 17:10:56'),
(11, '41', 7, NULL, '2025-08-26 17:14:26', '2025-08-26 17:14:26'),
(12, '42', 7, NULL, '2025-08-26 17:14:26', '2025-08-26 17:14:26'),
(13, '43', 7, NULL, '2025-08-26 17:14:26', '2025-08-26 17:14:26'),
(14, '44', 7, NULL, '2025-08-26 17:14:26', '2025-08-26 17:14:26'),
(15, '40', 8, NULL, '2025-08-26 17:16:01', '2025-08-26 17:16:01'),
(16, '41', 8, NULL, '2025-08-26 17:16:01', '2025-08-26 17:16:01'),
(17, '42', 8, NULL, '2025-08-26 17:16:01', '2025-08-26 17:16:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'adminsepatuku', 'sepatuku@gmail.com', NULL, '$2y$12$uHofeDKSBNb0sGck5tHffu8mguIG5feuysI7WdAjzMWcXYgwit59y', '4rZ2ZN2eKthP0DNtruhOF66lEkAOLT5Ic124CiYxdbiV3al0GCIYoXp12owa', '2025-08-16 19:50:34', '2025-08-16 19:50:34');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `exports`
--
ALTER TABLE `exports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exports_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `failed_import_rows`
--
ALTER TABLE `failed_import_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `failed_import_rows_import_id_foreign` (`import_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `imports`
--
ALTER TABLE `imports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `imports_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `product_transactions`
--
ALTER TABLE `product_transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_transactions_shoe_id_foreign` (`shoe_id`),
  ADD KEY `product_transactions_promo_code_id_foreign` (`promo_code_id`);

--
-- Indeks untuk tabel `promo_codes`
--
ALTER TABLE `promo_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `shoes`
--
ALTER TABLE `shoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shoes_category_id_foreign` (`category_id`),
  ADD KEY `shoes_brand_id_foreign` (`brand_id`);

--
-- Indeks untuk tabel `shoe_photos`
--
ALTER TABLE `shoe_photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shoe_photos_shoe_id_foreign` (`shoe_id`);

--
-- Indeks untuk tabel `shoe_sizes`
--
ALTER TABLE `shoe_sizes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shoe_sizes_shoe_id_foreign` (`shoe_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `exports`
--
ALTER TABLE `exports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `failed_import_rows`
--
ALTER TABLE `failed_import_rows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `imports`
--
ALTER TABLE `imports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `product_transactions`
--
ALTER TABLE `product_transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `promo_codes`
--
ALTER TABLE `promo_codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `shoes`
--
ALTER TABLE `shoes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `shoe_photos`
--
ALTER TABLE `shoe_photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `shoe_sizes`
--
ALTER TABLE `shoe_sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `exports`
--
ALTER TABLE `exports`
  ADD CONSTRAINT `exports_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `failed_import_rows`
--
ALTER TABLE `failed_import_rows`
  ADD CONSTRAINT `failed_import_rows_import_id_foreign` FOREIGN KEY (`import_id`) REFERENCES `imports` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `imports`
--
ALTER TABLE `imports`
  ADD CONSTRAINT `imports_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `product_transactions`
--
ALTER TABLE `product_transactions`
  ADD CONSTRAINT `product_transactions_promo_code_id_foreign` FOREIGN KEY (`promo_code_id`) REFERENCES `promo_codes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_transactions_shoe_id_foreign` FOREIGN KEY (`shoe_id`) REFERENCES `shoes` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `shoes`
--
ALTER TABLE `shoes`
  ADD CONSTRAINT `shoes_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `shoes_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `shoe_photos`
--
ALTER TABLE `shoe_photos`
  ADD CONSTRAINT `shoe_photos_shoe_id_foreign` FOREIGN KEY (`shoe_id`) REFERENCES `shoes` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `shoe_sizes`
--
ALTER TABLE `shoe_sizes`
  ADD CONSTRAINT `shoe_sizes_shoe_id_foreign` FOREIGN KEY (`shoe_id`) REFERENCES `shoes` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
