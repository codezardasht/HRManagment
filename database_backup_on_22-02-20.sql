

CREATE TABLE `active_log_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `activity` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL COMMENT 'for separting sections',
  `VRID` int(11) NOT NULL COMMENT 'for section id example type 1 is employee vertual id 2 two is create employe',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO active_log_users (id, user_id, activity, api_token, type, VRID, created_at, updated_at) VALUES ('1','2','Get All Employee','ceZuu6t1ew','1','1','2022-02-20 19:29:34','2022-02-20 19:29:34');

INSERT INTO active_log_users (id, user_id, activity, api_token, type, VRID, created_at, updated_at) VALUES ('2','2','Get All Employee','ceZuu6t1ew','1','1','2022-02-20 19:30:05','2022-02-20 19:30:05');

INSERT INTO active_log_users (id, user_id, activity, api_token, type, VRID, created_at, updated_at) VALUES ('3','2','Get All Employee','ceZuu6t1ew','1','1','2022-02-20 19:30:56','2022-02-20 19:30:56');

INSERT INTO active_log_users (id, user_id, activity, api_token, type, VRID, created_at, updated_at) VALUES ('4','2','Get All Employee','ceZuu6t1ew','1','1','2022-02-20 19:31:29','2022-02-20 19:31:29');

INSERT INTO active_log_users (id, user_id, activity, api_token, type, VRID, created_at, updated_at) VALUES ('5','2','Get All Employee','ceZuu6t1ew','1','1','2022-02-20 19:32:14','2022-02-20 19:32:14');

INSERT INTO active_log_users (id, user_id, activity, api_token, type, VRID, created_at, updated_at) VALUES ('6','2','Get All Employee','ceZuu6t1ew','1','1','2022-02-20 19:32:45','2022-02-20 19:32:45');

INSERT INTO active_log_users (id, user_id, activity, api_token, type, VRID, created_at, updated_at) VALUES ('7','2','Get All Employee','ceZuu6t1ew','1','1','2022-02-20 19:32:59','2022-02-20 19:32:59');

INSERT INTO active_log_users (id, user_id, activity, api_token, type, VRID, created_at, updated_at) VALUES ('8','2','Get All Employee','ceZuu6t1ew','1','1','2022-02-20 19:33:06','2022-02-20 19:33:06');

INSERT INTO active_log_users (id, user_id, activity, api_token, type, VRID, created_at, updated_at) VALUES ('9','2','Get All Employee','ceZuu6t1ew','1','1','2022-02-20 19:33:21','2022-02-20 19:33:21');

INSERT INTO active_log_users (id, user_id, activity, api_token, type, VRID, created_at, updated_at) VALUES ('10','2','Get All Employee','ceZuu6t1ew','1','1','2022-02-20 19:34:17','2022-02-20 19:34:17');

INSERT INTO active_log_users (id, user_id, activity, api_token, type, VRID, created_at, updated_at) VALUES ('11','2','Get All Employee','ceZuu6t1ew','1','1','2022-02-20 19:35:44','2022-02-20 19:35:44');

INSERT INTO active_log_users (id, user_id, activity, api_token, type, VRID, created_at, updated_at) VALUES ('12','2','Get All Employee','ceZuu6t1ew','1','1','2022-02-20 19:36:02','2022-02-20 19:36:02');

INSERT INTO active_log_users (id, user_id, activity, api_token, type, VRID, created_at, updated_at) VALUES ('13','2','Create Employee','ceZuu6t1ew','1','4','2022-02-20 19:39:49','2022-02-20 19:39:49');

INSERT INTO active_log_users (id, user_id, activity, api_token, type, VRID, created_at, updated_at) VALUES ('14','2','Edit Employee','ceZuu6t1ew','1','1','2022-02-20 19:43:02','2022-02-20 19:43:02');

INSERT INTO active_log_users (id, user_id, activity, api_token, type, VRID, created_at, updated_at) VALUES ('15','2','Edit Employee','ceZuu6t1ew','1','1','2022-02-20 19:43:37','2022-02-20 19:43:37');

INSERT INTO active_log_users (id, user_id, activity, api_token, type, VRID, created_at, updated_at) VALUES ('16','2','get Employee by Manager','ceZuu6t1ew','1','1','2022-02-20 19:46:46','2022-02-20 19:46:46');

INSERT INTO active_log_users (id, user_id, activity, api_token, type, VRID, created_at, updated_at) VALUES ('17','2','get Employee by Manager','ceZuu6t1ew','1','22','2022-02-20 19:46:55','2022-02-20 19:46:55');

INSERT INTO active_log_users (id, user_id, activity, api_token, type, VRID, created_at, updated_at) VALUES ('18','2','get Employee by Manager','ceZuu6t1ew','1','22','2022-02-20 19:47:11','2022-02-20 19:47:11');

INSERT INTO active_log_users (id, user_id, activity, api_token, type, VRID, created_at, updated_at) VALUES ('19','2','get Employee by Manager','ceZuu6t1ew','1','1','2022-02-20 19:47:15','2022-02-20 19:47:15');

INSERT INTO active_log_users (id, user_id, activity, api_token, type, VRID, created_at, updated_at) VALUES ('20','2','get Employee by Manager','ceZuu6t1ew','1','1','2022-02-20 19:49:19','2022-02-20 19:49:19');

INSERT INTO active_log_users (id, user_id, activity, api_token, type, VRID, created_at, updated_at) VALUES ('21','2','get Employee by Manager','ceZuu6t1ew','1','1','2022-02-20 19:49:21','2022-02-20 19:49:21');

INSERT INTO active_log_users (id, user_id, activity, api_token, type, VRID, created_at, updated_at) VALUES ('22','2','get Employee by Manager','ceZuu6t1ew','1','1','2022-02-20 19:49:35','2022-02-20 19:49:35');

INSERT INTO active_log_users (id, user_id, activity, api_token, type, VRID, created_at, updated_at) VALUES ('23','2','get Employee by Manager','ceZuu6t1ew','1','1','2022-02-20 19:50:16','2022-02-20 19:50:16');

INSERT INTO active_log_users (id, user_id, activity, api_token, type, VRID, created_at, updated_at) VALUES ('24','2','get Employee by Manager','ceZuu6t1ew','1','1','2022-02-20 19:50:58','2022-02-20 19:50:58');

INSERT INTO active_log_users (id, user_id, activity, api_token, type, VRID, created_at, updated_at) VALUES ('25','2','Create Employee','ceZuu6t1ew','1','5','2022-02-20 19:51:43','2022-02-20 19:51:43');

INSERT INTO active_log_users (id, user_id, activity, api_token, type, VRID, created_at, updated_at) VALUES ('26','2','show Employee','ceZuu6t1ew','1','1','2022-02-20 20:00:47','2022-02-20 20:00:47');

INSERT INTO active_log_users (id, user_id, activity, api_token, type, VRID, created_at, updated_at) VALUES ('27','2','show Employee','ceZuu6t1ew','1','2','2022-02-20 20:02:17','2022-02-20 20:02:17');

INSERT INTO active_log_users (id, user_id, activity, api_token, type, VRID, created_at, updated_at) VALUES ('28','2','show Employee','ceZuu6t1ew','1','1','2022-02-20 20:02:21','2022-02-20 20:02:21');

INSERT INTO active_log_users (id, user_id, activity, api_token, type, VRID, created_at, updated_at) VALUES ('29','2','show Employee','ceZuu6t1ew','1','1','2022-02-20 20:02:36','2022-02-20 20:02:36');


CREATE TABLE `employe` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `salary` decimal(10,2) NOT NULL,
  `gender` enum('male','female','other') COLLATE utf8mb4_unicode_ci NOT NULL,
  `hired_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `job_title` enum('manager','employee') COLLATE utf8mb4_unicode_ci NOT NULL,
  `manager_id` int(11) DEFAULT NULL,
  `deleted` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO employe (id, name, age, salary, gender, hired_date, job_title, manager_id, deleted, created_at, updated_at) VALUES ('1','zardasht update','24','1500.00','male','2022-01-01 00:00:00','manager','','0','2022-02-20 18:51:40','2022-02-20 19:05:58');

INSERT INTO employe (id, name, age, salary, gender, hired_date, job_title, manager_id, deleted, created_at, updated_at) VALUES ('2','ahmad','23','800.00','male','2022-01-01 00:00:00','employee','1','0','2022-02-20 19:10:44','2022-02-20 19:10:44');

INSERT INTO employe (id, name, age, salary, gender, hired_date, job_title, manager_id, deleted, created_at, updated_at) VALUES ('3','muhammad','24','800.00','male','2022-01-01 00:00:00','employee','1','0','2022-02-20 19:38:53','2022-02-20 19:38:53');

INSERT INTO employe (id, name, age, salary, gender, hired_date, job_title, manager_id, deleted, created_at, updated_at) VALUES ('4','ahmad najmadin','25','800.00','male','2022-01-01 00:00:00','employee','1','0','2022-02-20 19:39:49','2022-02-20 19:39:49');

INSERT INTO employe (id, name, age, salary, gender, hired_date, job_title, manager_id, deleted, created_at, updated_at) VALUES ('5','ali','22','800.00','male','2022-01-01 00:00:00','employee','1','0','2022-02-20 19:51:43','2022-02-20 19:51:43');


CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO migrations (id, migration, batch) VALUES ('1','2014_10_12_000000_create_users_table','1');

INSERT INTO migrations (id, migration, batch) VALUES ('2','2014_10_12_100000_create_password_resets_table','1');

INSERT INTO migrations (id, migration, batch) VALUES ('3','2019_08_19_000000_create_failed_jobs_table','1');

INSERT INTO migrations (id, migration, batch) VALUES ('4','2019_12_14_000001_create_personal_access_tokens_table','1');

INSERT INTO migrations (id, migration, batch) VALUES ('5','2022_02_20_181548_create_employe_table','1');

INSERT INTO migrations (id, migration, batch) VALUES ('6','2022_02_20_190109_add_column_deleted_employee','2');

INSERT INTO migrations (id, migration, batch) VALUES ('7','2022_02_20_190838_add_column_manager_id_employee_table','3');

INSERT INTO migrations (id, migration, batch) VALUES ('8','2022_02_20_191628_create_active_log_users_column','4');


CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_token` char(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_api_token_unique` (`api_token`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO users (id, name, email, email_verified_at, password, api_token, remember_token, created_at, updated_at) VALUES ('1','zardasht','zardasht@gmail.com','','$2y$10$zxEUezndOFvG3b6oxZVZtO6iY5ioKoiUCIlC1/BonSRnawpAYxrZK','','','2022-02-20 18:31:36','2022-02-20 18:31:36');

INSERT INTO users (id, name, email, email_verified_at, password, api_token, remember_token, created_at, updated_at) VALUES ('2','zardasht','zardasht1@gmail.com','','$2y$10$2OC95mrVzegx/gl.upeCJedXk.0Evr8S.3sKYhmIJr.vUD7Oi3r2a','ceZuu6t1ew','','2022-02-20 18:33:19','2022-02-20 18:33:19');
