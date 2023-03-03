-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table breeze.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping data for table breeze.migrations: ~4 rows (approximately)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping data for table breeze.password_resets: ~0 rows (approximately)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping data for table breeze.personal_access_tokens: ~0 rows (approximately)
DELETE FROM `personal_access_tokens`;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping data for table breeze.users: ~2 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Orlando Alston', 'mucici@mailinator.com', NULL, '$2y$10$I.Us3Jyp5az1jOlvP5MOuOQ7zyZ3UmXE/TB3AWGGiKlAek7jyhpky', NULL, '2023-03-03 05:16:35', '2023-03-03 05:16:35'),
	(2, 'Summer Shields', 'jisifo@mailinator.com', NULL, '$2y$10$qQHyaTSb2OPhbknMQdgdaeP9vi1r.O7RpuRbLVhKNkylF61g1BdSq', NULL, '2023-03-03 07:03:28', '2023-03-03 07:03:28');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping data for table data.accounts: ~5 rows (approximately)
DELETE FROM `accounts`;
/*!40000 ALTER TABLE `accounts` DISABLE KEYS */;
INSERT INTO `accounts` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
	(1, 'Mr. Ward Breitenberg III', 'oswald.dibbert@hettinger.net', 'YA)Jbryd:e;[\'PVf<$7', '2023-03-03 03:24:13', '2023-03-03 03:24:13'),
	(2, 'Alisa Maggio', 'breitenberg.saul@yahoo.com', 'AfK2AvG9', '2023-03-03 03:24:13', '2023-03-03 03:24:13'),
	(3, 'Rosalind Kulas', 'grau@hotmail.com', '#"aZ2Ld\\F|J,x', '2023-03-03 03:24:13', '2023-03-03 03:24:13'),
	(4, 'Ellie Hyatt MD', 'alberta69@kunze.net', '0@_;]Ba0*7dqNs\\', '2023-03-03 03:24:13', '2023-03-03 03:24:13'),
	(5, 'Samir Hand II', 'ferry.colleen@predovic.com', '?h[+g.sL4r95', '2023-03-03 03:24:13', '2023-03-03 03:24:13');
/*!40000 ALTER TABLE `accounts` ENABLE KEYS */;

-- Dumping data for table data.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping data for table data.migrations: ~5 rows (approximately)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_03_02_111125_create_accounts_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping data for table data.password_resets: ~0 rows (approximately)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping data for table data.personal_access_tokens: ~0 rows (approximately)
DELETE FROM `personal_access_tokens`;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping data for table data.users: ~0 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping data for table fortify.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping data for table fortify.migrations: ~5 rows (approximately)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
	(4, '2019_08_19_000000_create_failed_jobs_table', 1),
	(5, '2019_12_14_000001_create_personal_access_tokens_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping data for table fortify.password_resets: ~0 rows (approximately)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping data for table fortify.personal_access_tokens: ~0 rows (approximately)
DELETE FROM `personal_access_tokens`;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping data for table fortify.users: ~0 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping data for table information.infromation_table: ~5 rows (approximately)
DELETE FROM `infromation_table`;
/*!40000 ALTER TABLE `infromation_table` DISABLE KEYS */;
INSERT INTO `infromation_table` (`S.No.`, `Username`, `Password`, `Confirm Password`) VALUES
	(1, 'Ram', 'hello', 'sorry'),
	(2, 'admin@signup', 'admin', 'admin'),
	(3, 'second@admin', 'admin2nd', 'admin2nd'),
	(4, 'zuzif@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!'),
	(5, 'sasytele@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!'),
	(6, 'sasytele@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!');
/*!40000 ALTER TABLE `infromation_table` ENABLE KEYS */;

-- Dumping data for table items.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping data for table items.items: ~2 rows (approximately)
DELETE FROM `items`;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` (`id`, `image`, `name`, `in_stock`, `brands`, `price`, `created_at`, `updated_at`) VALUES
	(22, '202303020504marketing post.jpg', 'Victoria Holden', 97, 'Ex explicabo Cupidi', '733', '2023-03-02 05:04:05', '2023-03-02 05:04:05'),
	(23, '202303020504business soluton post.jpg', 'Fallon Knapp', 77, 'Quos ipsum enim et c', '760', '2023-03-02 05:04:15', '2023-03-02 05:04:15'),
	(27, '20230303074466.jpg', 'Christine Craig', 22, 'Quae rerum molestiae', '937', '2023-03-02 09:05:22', '2023-03-03 07:44:28');
/*!40000 ALTER TABLE `items` ENABLE KEYS */;

-- Dumping data for table items.item_images: ~0 rows (approximately)
DELETE FROM `item_images`;
/*!40000 ALTER TABLE `item_images` DISABLE KEYS */;
/*!40000 ALTER TABLE `item_images` ENABLE KEYS */;

-- Dumping data for table items.migrations: ~10 rows (approximately)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(27, '2014_10_12_000000_create_users_table', 1),
	(28, '2014_10_12_100000_create_password_resets_table', 1),
	(29, '2019_08_19_000000_create_failed_jobs_table', 1),
	(30, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(31, '2023_03_01_040510_create_items_table', 1),
	(32, '2023_03_01_044052_update_and_addstatus_to_items', 1),
	(33, '2023_03_01_045329_add_in-stock_to_items', 1),
	(34, '2023_03_01_045409_remove_in-stock_to_items', 1),
	(35, '2023_03_01_045435_add_in-stock_to_items', 1),
	(36, '2023_03_01_045619_remove_in-stock_to_items', 1),
	(37, '2023_03_01_105835_create_item_images_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping data for table items.password_resets: ~0 rows (approximately)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping data for table items.personal_access_tokens: ~0 rows (approximately)
DELETE FROM `personal_access_tokens`;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping data for table items.users: ~0 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping data for table login.accounts: ~0 rows (approximately)
DELETE FROM `accounts`;
/*!40000 ALTER TABLE `accounts` DISABLE KEYS */;
INSERT INTO `accounts` (`id`, `fname`, `email`, `password`, `created_at`) VALUES
	(2, '', '', '$2y$10$2B7Wgrs4VFhVpIrwSpWbV.LrQyLFhPEE7J.V8TmjLhDMIU6xlE/jy', '2023-02-22 11:14:07');
/*!40000 ALTER TABLE `accounts` ENABLE KEYS */;

-- Dumping data for table myapp.myguests: ~2 rows (approximately)
DELETE FROM `myguests`;
/*!40000 ALTER TABLE `myguests` DISABLE KEYS */;
INSERT INTO `myguests` (`id`, `firstname`, `lastname`, `email`, `reg_date`) VALUES
	(1, 'John', 'Doe', 'john@example.com', '2023-01-30 12:54:27'),
	(3, 'John', 'Doe', 'john@example1.com', '2023-01-30 12:54:49'),
	(6, 'Ram', 'Doe', 'ram@example1.com', '2023-01-30 13:17:16');
/*!40000 ALTER TABLE `myguests` ENABLE KEYS */;

-- Dumping data for table myapp.posts: ~2 rows (approximately)
DELETE FROM `posts`;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `title`) VALUES
	(1, 'Lorem ipsum dolor sit amet, consectetur'),
	(2, 'Lorem ipsum dolor sit amet, consectetur');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

-- Dumping data for table mycodewing.employeetable: ~13 rows (approximately)
DELETE FROM `employeetable`;
/*!40000 ALTER TABLE `employeetable` DISABLE KEYS */;
INSERT INTO `employeetable` (`id`, `firstname`, `lastname`, `email`, `reg_date`) VALUES
	(1, 'Amit', 'Acharya', 'amit.codewing@gmail.com', '2023-01-30 14:35:24'),
	(2, 'Basanta', 'Chaudhary', 'basanta.codewing@gmail.com', '2023-01-30 14:38:25'),
	(3, 'Madan', 'G.C.', 'madan.codewing@gmail.com', '2023-01-30 14:38:53'),
	(4, 'Raj', 'Kumar_Tamang', 'raj.codewing@gmail.com', '2023-01-30 14:39:01'),
	(5, 'Abhisek', 'Rijal', 'abhisek.codewing@gmail.com', '2023-01-30 14:39:09'),
	(6, 'Amit', 'Acharya', 'amit.codewing@gmail.com', '2023-01-30 15:01:38'),
	(7, 'Abhisek', 'Rijal', 'abhisek.codewing@gmail.com', '2023-01-30 15:01:38'),
	(8, 'Raj', 'Kumar_Tamang', 'raj.codewing@gmail.com', '2023-01-30 15:01:38'),
	(9, 'Madan', 'G.C.', 'madan.codewing@gmail.com', '2023-01-30 15:01:38'),
	(10, 'Basanta', 'Chaudhary', 'basanta.codewing@gmail.com', '2023-01-30 15:01:38'),
	(11, 'Amit', 'Acharya', 'amit.codewing@gmail.com', '2023-02-13 09:01:22'),
	(12, 'Abhisek', 'Rijal', 'abhisek.codewing@gmail.com', '2023-02-13 09:01:22'),
	(13, 'Raj', 'Kumar_Tamang', 'raj.codewing@gmail.com', '2023-02-13 09:01:22'),
	(14, 'Madan', 'G.C.', 'madan.codewing@gmail.com', '2023-02-13 09:01:22'),
	(15, 'Basanta', 'Chaudhary', 'basanta.codewing@gmail.com', '2023-02-13 09:01:22');
/*!40000 ALTER TABLE `employeetable` ENABLE KEYS */;

-- Dumping data for table mydbtest.mytest: ~6 rows (approximately)
DELETE FROM `mytest`;
/*!40000 ALTER TABLE `mytest` DISABLE KEYS */;
INSERT INTO `mytest` (`id`, `name`, `post`, `email`, `reg_date`) VALUES
	(1, 'Ram', 'Designer', 'Ram.codewing@gmail.com', '2023-02-13 09:30:28'),
	(2, 'Shyam', 'Developer', 'Shyam.codewing@gmail.com', '2023-02-15 10:59:08'),
	(3, 'Hari', 'Frontend', 'Hari.codewing@gmail.com', '2023-02-13 09:36:08'),
	(4, 'Rita', 'Designer', 'Rita.codewing@gmail.com', '2023-02-13 09:45:10'),
	(8, 'Amit', 'Laravel Developer', 'Amit.codewing@gmail.com', '2023-02-13 10:44:31'),
	(9, 'Abhisek', 'Laravel Developer', 'Abhisek.codewing@gmail.com', '2023-02-13 10:44:31'),
	(10, 'Bibek', 'Frontend Intern', 'Bibek.codewing@gmail.com', '2023-02-13 10:44:31');
/*!40000 ALTER TABLE `mytest` ENABLE KEYS */;

-- Dumping data for table users.users: ~9 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`sno`, `fullname`, `email`, `password`, `dt`) VALUES
	(1, 'harry', 'harry@gmail.com', '$2y$10$Z164WaFBxgCKWOwJqaQmDeW0/nM6fMTcTjsxSpB4OkHcGPykc4dyS', '2023-02-23 14:08:04'),
	(2, 'Brett Jenkins', 'dihovijiqo@mailinator.com', '$2y$10$.aNksmqggeqJgSrYZSNgbeagn3KyweXrwIAdrefFJvA6o3EYgGrNC', '2023-02-23 14:11:52'),
	(3, 'Zephania Dixon', 'wowinokuzo@mailinator.com', '$2y$10$mLx.vOdaND4BXrBxDqoOL.MCHteKborDDJlS9ZXbtQ9G0W1mfbgp.', '2023-02-23 14:28:12'),
	(4, 'Dale Lynn', 'cugoqoru@mailinator.com', '$2y$10$oD.B7vR8AvoqV4PeeLjSleYQMxs.PLxesJsc3lDFFuy2qCkE62boW', '2023-02-23 14:28:27'),
	(5, 'Abel Mayer', 'zacy@mailinator.com', '$2y$10$QUJR6ZRFTCdccy0LG6gB0.jYaGMokT75JRgs42HwUQuB3NrQsN9L6', '2023-02-23 15:11:23'),
	(6, 'Maisie Mendez', 'vuce@mailinator.com', '$2y$10$24MnwGvUZ9Fqh5cQmoazfOS8u2xs/o63d984uBkfSlKuvuIgANJO6', '2023-02-28 09:05:22'),
	(7, 'Pandora Wade', 'wyzu@mailinator.com', '$2y$10$GTGeeC8W0l55WH0bJTZ52.7.B9VQVSr9GpqmAFpPVuvz7rkJhTcEy', '2023-02-28 09:05:53'),
	(8, 'Alexandra Horton', 'zaso@mailinator.com', '$2y$10$9FfMO0z.0bl1qSOq.Q7XtuPnSqzu9d6UCMYPdrX6JimtcvmTDym5G', '2023-03-02 09:13:31'),
	(9, 'Jael Ramos', 'ragixidig@mailinator.com', '$2y$10$X/rUumftua9BaNJT7xCEuuesDG2e3gWf0.v3MOoEa3L4X46L6uK7O', '2023-03-02 09:14:07'),
	(10, 'Aidan Farley', 'sidago@mailinator.com', '$2y$10$RwCtCbzDcGmIo7Q6UEjL5.Or1xxhYV37GfisHUriqFZLnjf11fAde', '2023-03-02 09:14:35');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
