-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               PostgreSQL 15.13, compiled by Visual C++ build 1944, 64-bit
-- Server OS:                    
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES  */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table public.bus: 2 rows
/*!40000 ALTER TABLE "bus" DISABLE KEYS */;
REPLACE INTO "bus" ("id", "name", "price", "category_id", "created_at", "updated_at") VALUES
	(2, 'Trans Jakarta', 200000.00, 1, NULL, NULL),
	(4, 'surabaya Bus', 100000.00, 2, NULL, NULL);
/*!40000 ALTER TABLE "bus" ENABLE KEYS */;

-- Dumping data for table public.categories: 2 rows
/*!40000 ALTER TABLE "categories" DISABLE KEYS */;
REPLACE INTO "categories" ("id", "name", "created_at", "updated_at") VALUES
	(1, 'Klasik', '2025-07-19 04:39:20', '2025-07-19 04:39:20'),
	(9, 'Express', '2025-07-19 14:04:57', '2025-07-19 14:05:01');
/*!40000 ALTER TABLE "categories" ENABLE KEYS */;

-- Dumping data for table public.failed_jobs: 0 rows
/*!40000 ALTER TABLE "failed_jobs" DISABLE KEYS */;
/*!40000 ALTER TABLE "failed_jobs" ENABLE KEYS */;

-- Dumping data for table public.halte_akhir: 0 rows
/*!40000 ALTER TABLE "halte_akhir" DISABLE KEYS */;
/*!40000 ALTER TABLE "halte_akhir" ENABLE KEYS */;

-- Dumping data for table public.halte_awal: 0 rows
/*!40000 ALTER TABLE "halte_awal" DISABLE KEYS */;
/*!40000 ALTER TABLE "halte_awal" ENABLE KEYS */;

-- Dumping data for table public.migrations: 8 rows
/*!40000 ALTER TABLE "migrations" DISABLE KEYS */;
REPLACE INTO "migrations" ("id", "migration", "batch") VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2025_07_19_032458_create_bus_table', 2),
	(6, '2025_07_19_033321_create_categories_table', 2),
	(7, '2025_07_19_060603_create_halte_awal', 3),
	(8, '2025_07_19_060623_create_halte_akhir', 3);
/*!40000 ALTER TABLE "migrations" ENABLE KEYS */;

-- Dumping data for table public.password_reset_tokens: 0 rows
/*!40000 ALTER TABLE "password_reset_tokens" DISABLE KEYS */;
/*!40000 ALTER TABLE "password_reset_tokens" ENABLE KEYS */;

-- Dumping data for table public.personal_access_tokens: 0 rows
/*!40000 ALTER TABLE "personal_access_tokens" DISABLE KEYS */;
/*!40000 ALTER TABLE "personal_access_tokens" ENABLE KEYS */;

-- Dumping data for table public.users: 0 rows
/*!40000 ALTER TABLE "users" DISABLE KEYS */;
/*!40000 ALTER TABLE "users" ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
