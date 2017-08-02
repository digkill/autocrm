/*
Navicat PGSQL Data Transfer

Source Database       : autocrm
Source Schema         : public

Target Server Type    : PGSQL
Target Server Version : 90500
File Encoding         : 65001

Date: 2017-08-02 14:56:54
*/


-- ----------------------------
-- Sequence structure for car_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "car_id_seq";
CREATE SEQUENCE "car_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 8
 CACHE 1;
SELECT setval('"public"."car_id_seq"', 8, true);

-- ----------------------------
-- Sequence structure for customer_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "customer_id_seq";
CREATE SEQUENCE "customer_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 5
 CACHE 1;
SELECT setval('"public"."customer_id_seq"', 5, true);

-- ----------------------------
-- Sequence structure for department_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "department_id_seq";
CREATE SEQUENCE "department_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for hire_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "hire_id_seq";
CREATE SEQUENCE "hire_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 61
 CACHE 1;
SELECT setval('"public"."hire_id_seq"', 61, true);

-- ----------------------------
-- Sequence structure for mark_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "mark_id_seq";
CREATE SEQUENCE "mark_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 5
 CACHE 1;
SELECT setval('"public"."mark_id_seq"', 5, true);

-- ----------------------------
-- Sequence structure for oauth2_access_tokens_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "oauth2_access_tokens_id_seq";
CREATE SEQUENCE "oauth2_access_tokens_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 9
 CACHE 1;
SELECT setval('"public"."oauth2_access_tokens_id_seq"', 9, true);

-- ----------------------------
-- Sequence structure for oauth2_auth_codes_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "oauth2_auth_codes_id_seq";
CREATE SEQUENCE "oauth2_auth_codes_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for oauth2_clients_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "oauth2_clients_id_seq";
CREATE SEQUENCE "oauth2_clients_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for oauth2_refresh_tokens_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "oauth2_refresh_tokens_id_seq";
CREATE SEQUENCE "oauth2_refresh_tokens_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 9
 CACHE 1;
SELECT setval('"public"."oauth2_refresh_tokens_id_seq"', 9, true);

-- ----------------------------
-- Sequence structure for point_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "point_id_seq";
CREATE SEQUENCE "point_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 3
 CACHE 1;
SELECT setval('"public"."point_id_seq"', 3, true);

-- ----------------------------
-- Sequence structure for post_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "post_id_seq";
CREATE SEQUENCE "post_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;
SELECT setval('"public"."post_id_seq"', 1, true);

-- ----------------------------
-- Sequence structure for rate_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "rate_id_seq";
CREATE SEQUENCE "rate_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for users_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "users_id_seq";
CREATE SEQUENCE "users_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;
SELECT setval('"public"."users_id_seq"', 1, true);

-- ----------------------------
-- Sequence structure for worker_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "worker_id_seq";
CREATE SEQUENCE "worker_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 3
 CACHE 1;
SELECT setval('"public"."worker_id_seq"', 3, true);

-- ----------------------------
-- Table structure for car
-- ----------------------------
DROP TABLE IF EXISTS "car";
CREATE TABLE "car" (
"id" int4 DEFAULT nextval('car_id_seq'::regclass) NOT NULL,
"mark_id" int4,
"number" varchar(20) COLLATE "default" NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of car
-- ----------------------------
BEGIN;
INSERT INTO "car" VALUES ('1', '2', 'X777XX159');
INSERT INTO "car" VALUES ('3', '1', 'H123OA777');
INSERT INTO "car" VALUES ('7', '2', 'O642HA159');
INSERT INTO "car" VALUES ('8', '3', 'H421AO59');
COMMIT;

-- ----------------------------
-- Table structure for customer
-- ----------------------------
DROP TABLE IF EXISTS "customer";
CREATE TABLE "customer" (
"id" int4 DEFAULT nextval('customer_id_seq'::regclass) NOT NULL,
"name" varchar(60) COLLATE "default" NOT NULL,
"passport_number" varchar(60) COLLATE "default" NOT NULL,
"license_number" varchar(60) COLLATE "default" NOT NULL,
"address" varchar(255) COLLATE "default" NOT NULL,
"phone" varchar(30) COLLATE "default" NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of customer
-- ----------------------------
BEGIN;
INSERT INTO "customer" VALUES ('1', 'Иванов Иван Иваныч', '5711342134', '12131', 'Пермь', '+79922185250');
INSERT INTO "customer" VALUES ('2', 'Петрова Ольга Михайловна', '5712321323', '34211', 'Москва', '+79194445647');
INSERT INTO "customer" VALUES ('4', 'Ефрема Ольга Александровна', '5672132423', '32133', 'Пермь', '+79192232444');
COMMIT;

-- ----------------------------
-- Table structure for hire
-- ----------------------------
DROP TABLE IF EXISTS "hire";
CREATE TABLE "hire" (
"id" int4 DEFAULT nextval('hire_id_seq'::regclass) NOT NULL,
"car_id" int4,
"point_id" int4,
"customer_id" int4,
"worker_id" int4,
"start_date" timestamp(0) NOT NULL,
"end_date" timestamp(0) NOT NULL,
"status" int4 NOT NULL,
"cost" int4 NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of hire
-- ----------------------------
BEGIN;
INSERT INTO "hire" VALUES ('44', '3', '1', '1', '1', '2017-08-02 00:00:00', '2017-08-03 00:00:00', '0', '250000');
INSERT INTO "hire" VALUES ('48', '3', '1', '1', '1', '2017-07-31 00:00:00', '2017-08-01 00:00:00', '0', '210000');
INSERT INTO "hire" VALUES ('51', '7', '2', '2', '2', '2017-08-02 13:14:08', '2017-08-03 13:14:17', '0', '210000');
INSERT INTO "hire" VALUES ('52', '3', '2', '1', '2', '2017-08-02 13:15:48', '2017-08-04 13:15:51', '0', '180000');
INSERT INTO "hire" VALUES ('53', '8', '1', '1', '2', '2017-08-02 13:16:13', '2017-08-03 13:16:17', '0', '210000');
INSERT INTO "hire" VALUES ('57', '1', '3', '2', '2', '2017-08-10 13:17:33', '2017-08-11 13:17:38', '0', '180000');
INSERT INTO "hire" VALUES ('58', '3', '1', '1', '2', '2017-08-01 00:00:00', '2017-08-02 00:00:00', '1', '240000');
INSERT INTO "hire" VALUES ('59', '8', '2', '4', '2', '2017-08-03 00:00:00', '2017-08-04 00:00:00', '1', '250000');
INSERT INTO "hire" VALUES ('60', '7', '2', '4', '1', '2017-08-01 00:00:00', '2017-08-02 00:00:00', '1', '180000');
INSERT INTO "hire" VALUES ('61', '1', '2', '2', '2', '2017-08-01 00:00:00', '2017-08-02 00:00:00', '1', '210000');
COMMIT;

-- ----------------------------
-- Table structure for mark
-- ----------------------------
DROP TABLE IF EXISTS "mark";
CREATE TABLE "mark" (
"id" int4 DEFAULT nextval('mark_id_seq'::regclass) NOT NULL,
"name" varchar(60) COLLATE "default" NOT NULL,
"class" varchar(60) COLLATE "default" NOT NULL,
"model" varchar(60) COLLATE "default" NOT NULL,
"places" int4 NOT NULL,
"year_of_issue" int4 NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of mark
-- ----------------------------
BEGIN;
INSERT INTO "mark" VALUES ('1', 'BMW', 'C', 'X5', '5', '2017');
INSERT INTO "mark" VALUES ('2', 'Mercedes', 'C', 'C', '5', '2017');
INSERT INTO "mark" VALUES ('3', 'LADA', 'C', 'VESTA', '5', '2017');
INSERT INTO "mark" VALUES ('5', 'Ford', 'C', 'FOCUS', '5', '2016');
COMMIT;

-- ----------------------------
-- Table structure for oauth2_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS "oauth2_access_tokens";
CREATE TABLE "oauth2_access_tokens" (
"id" int4 NOT NULL,
"client_id" int4 NOT NULL,
"user_id" int4,
"token" varchar(255) COLLATE "default" NOT NULL,
"expires_at" int4,
"scope" varchar(255) COLLATE "default" DEFAULT NULL::character varying
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of oauth2_access_tokens
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for oauth2_auth_codes
-- ----------------------------
DROP TABLE IF EXISTS "oauth2_auth_codes";
CREATE TABLE "oauth2_auth_codes" (
"id" int4 NOT NULL,
"client_id" int4 NOT NULL,
"user_id" int4,
"token" varchar(255) COLLATE "default" NOT NULL,
"redirect_uri" text COLLATE "default" NOT NULL,
"expires_at" int4,
"scope" varchar(255) COLLATE "default" DEFAULT NULL::character varying
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of oauth2_auth_codes
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for oauth2_clients
-- ----------------------------
DROP TABLE IF EXISTS "oauth2_clients";
CREATE TABLE "oauth2_clients" (
"id" int4 NOT NULL,
"random_id" varchar(255) COLLATE "default" NOT NULL,
"redirect_uris" text COLLATE "default" NOT NULL,
"secret" varchar(255) COLLATE "default" NOT NULL,
"allowed_grant_types" text COLLATE "default" NOT NULL
)
WITH (OIDS=FALSE)

;
COMMENT ON COLUMN "oauth2_clients"."redirect_uris" IS '(DC2Type:array)';
COMMENT ON COLUMN "oauth2_clients"."allowed_grant_types" IS '(DC2Type:array)';

-- ----------------------------
-- Records of oauth2_clients
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for oauth2_refresh_tokens
-- ----------------------------
DROP TABLE IF EXISTS "oauth2_refresh_tokens";
CREATE TABLE "oauth2_refresh_tokens" (
"id" int4 NOT NULL,
"client_id" int4 NOT NULL,
"user_id" int4,
"token" varchar(255) COLLATE "default" NOT NULL,
"expires_at" int4,
"scope" varchar(255) COLLATE "default" DEFAULT NULL::character varying
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of oauth2_refresh_tokens
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for point
-- ----------------------------
DROP TABLE IF EXISTS "point";
CREATE TABLE "point" (
"id" int4 DEFAULT nextval('point_id_seq'::regclass) NOT NULL,
"name" varchar(60) COLLATE "default" NOT NULL,
"address" varchar(255) COLLATE "default" NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of point
-- ----------------------------
BEGIN;
INSERT INTO "point" VALUES ('1', 'Мотовилиха', 'Россия, Пермь, улица Аркадия Гайдара, 8Б');
INSERT INTO "point" VALUES ('2', 'Центр', 'Россия, Пермь, улица Ленина, 56');
INSERT INTO "point" VALUES ('3', 'Мира', 'Россия, Пермь, улица Мира, 98');
COMMIT;

-- ----------------------------
-- Table structure for post
-- ----------------------------
DROP TABLE IF EXISTS "post";
CREATE TABLE "post" (
"id" int4 DEFAULT nextval('post_id_seq'::regclass) NOT NULL,
"name" varchar(60) COLLATE "default" NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of post
-- ----------------------------
BEGIN;
INSERT INTO "post" VALUES ('1', 'Менеджер');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS "users";
CREATE TABLE "users" (
"id" int4 NOT NULL,
"username" varchar(180) COLLATE "default" NOT NULL,
"username_canonical" varchar(180) COLLATE "default" NOT NULL,
"email" varchar(180) COLLATE "default" NOT NULL,
"email_canonical" varchar(180) COLLATE "default" NOT NULL,
"enabled" bool NOT NULL,
"salt" varchar(255) COLLATE "default" DEFAULT NULL::character varying,
"password" varchar(255) COLLATE "default" NOT NULL,
"last_login" timestamp(0) DEFAULT NULL::timestamp without time zone,
"confirmation_token" varchar(180) COLLATE "default" DEFAULT NULL::character varying,
"password_requested_at" timestamp(0) DEFAULT NULL::timestamp without time zone,
"roles" text COLLATE "default" NOT NULL
)
WITH (OIDS=FALSE)

;
COMMENT ON COLUMN "users"."roles" IS '(DC2Type:array)';

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for worker
-- ----------------------------
DROP TABLE IF EXISTS "worker";
CREATE TABLE "worker" (
"id" int4 DEFAULT nextval('worker_id_seq'::regclass) NOT NULL,
"post_id" int4,
"name" varchar(60) COLLATE "default" NOT NULL,
"salary" int4 NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of worker
-- ----------------------------
BEGIN;
INSERT INTO "worker" VALUES ('1', '1', 'Ковальчук Василиса Петрова', '1890033');
INSERT INTO "worker" VALUES ('2', '1', 'Матвеева Ульяна Константиновна', '2200000');
INSERT INTO "worker" VALUES ('3', '1', 'Иванов Иван Иваныч', '1255005');
COMMIT;

-- ----------------------------
-- Alter Sequences Owned By 
-- ----------------------------
ALTER SEQUENCE "car_id_seq" OWNED BY "car"."id";
ALTER SEQUENCE "customer_id_seq" OWNED BY "customer"."id";
ALTER SEQUENCE "hire_id_seq" OWNED BY "hire"."id";
ALTER SEQUENCE "mark_id_seq" OWNED BY "mark"."id";
ALTER SEQUENCE "point_id_seq" OWNED BY "point"."id";
ALTER SEQUENCE "post_id_seq" OWNED BY "post"."id";
ALTER SEQUENCE "worker_id_seq" OWNED BY "worker"."id";

-- ----------------------------
-- Indexes structure for table car
-- ----------------------------
CREATE INDEX "idx_773de69d4290f12b" ON "car" USING btree ("mark_id");

-- ----------------------------
-- Primary Key structure for table car
-- ----------------------------
ALTER TABLE "car" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table customer
-- ----------------------------
ALTER TABLE "customer" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Indexes structure for table hire
-- ----------------------------
CREATE INDEX "idx_b8017efcc3c6f69f" ON "hire" USING btree ("car_id");
CREATE INDEX "idx_b8017efcc028cea2" ON "hire" USING btree ("point_id");
CREATE INDEX "idx_b8017efc9395c3f3" ON "hire" USING btree ("customer_id");
CREATE INDEX "idx_b8017efc6b20ba36" ON "hire" USING btree ("worker_id");

-- ----------------------------
-- Primary Key structure for table hire
-- ----------------------------
ALTER TABLE "hire" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table mark
-- ----------------------------
ALTER TABLE "mark" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Indexes structure for table oauth2_access_tokens
-- ----------------------------
CREATE UNIQUE INDEX "uniq_d247a21b5f37a13b" ON "oauth2_access_tokens" USING btree ("token");
CREATE INDEX "idx_d247a21b19eb6921" ON "oauth2_access_tokens" USING btree ("client_id");
CREATE INDEX "idx_d247a21ba76ed395" ON "oauth2_access_tokens" USING btree ("user_id");

-- ----------------------------
-- Primary Key structure for table oauth2_access_tokens
-- ----------------------------
ALTER TABLE "oauth2_access_tokens" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Indexes structure for table oauth2_auth_codes
-- ----------------------------
CREATE UNIQUE INDEX "uniq_a018a10d5f37a13b" ON "oauth2_auth_codes" USING btree ("token");
CREATE INDEX "idx_a018a10d19eb6921" ON "oauth2_auth_codes" USING btree ("client_id");
CREATE INDEX "idx_a018a10da76ed395" ON "oauth2_auth_codes" USING btree ("user_id");

-- ----------------------------
-- Primary Key structure for table oauth2_auth_codes
-- ----------------------------
ALTER TABLE "oauth2_auth_codes" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table oauth2_clients
-- ----------------------------
ALTER TABLE "oauth2_clients" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Indexes structure for table oauth2_refresh_tokens
-- ----------------------------
CREATE UNIQUE INDEX "uniq_d394478c5f37a13b" ON "oauth2_refresh_tokens" USING btree ("token");
CREATE INDEX "idx_d394478c19eb6921" ON "oauth2_refresh_tokens" USING btree ("client_id");
CREATE INDEX "idx_d394478ca76ed395" ON "oauth2_refresh_tokens" USING btree ("user_id");

-- ----------------------------
-- Primary Key structure for table oauth2_refresh_tokens
-- ----------------------------
ALTER TABLE "oauth2_refresh_tokens" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table point
-- ----------------------------
ALTER TABLE "point" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table post
-- ----------------------------
ALTER TABLE "post" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Indexes structure for table users
-- ----------------------------
CREATE UNIQUE INDEX "uniq_1483a5e992fc23a8" ON "users" USING btree ("username_canonical");
CREATE UNIQUE INDEX "uniq_1483a5e9a0d96fbf" ON "users" USING btree ("email_canonical");
CREATE UNIQUE INDEX "uniq_1483a5e9c05fb297" ON "users" USING btree ("confirmation_token");

-- ----------------------------
-- Primary Key structure for table users
-- ----------------------------
ALTER TABLE "users" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Indexes structure for table worker
-- ----------------------------
CREATE INDEX "idx_9fb2bf624b89032c" ON "worker" USING btree ("post_id");

-- ----------------------------
-- Primary Key structure for table worker
-- ----------------------------
ALTER TABLE "worker" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Foreign Key structure for table "car"
-- ----------------------------
ALTER TABLE "car" ADD FOREIGN KEY ("mark_id") REFERENCES "mark" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "hire"
-- ----------------------------
ALTER TABLE "hire" ADD FOREIGN KEY ("customer_id") REFERENCES "customer" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "hire" ADD FOREIGN KEY ("worker_id") REFERENCES "worker" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "hire" ADD FOREIGN KEY ("car_id") REFERENCES "car" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "hire" ADD FOREIGN KEY ("point_id") REFERENCES "point" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "oauth2_access_tokens"
-- ----------------------------
ALTER TABLE "oauth2_access_tokens" ADD FOREIGN KEY ("client_id") REFERENCES "oauth2_clients" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "oauth2_access_tokens" ADD FOREIGN KEY ("user_id") REFERENCES "users" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "oauth2_auth_codes"
-- ----------------------------
ALTER TABLE "oauth2_auth_codes" ADD FOREIGN KEY ("client_id") REFERENCES "oauth2_clients" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "oauth2_auth_codes" ADD FOREIGN KEY ("user_id") REFERENCES "users" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "oauth2_refresh_tokens"
-- ----------------------------
ALTER TABLE "oauth2_refresh_tokens" ADD FOREIGN KEY ("client_id") REFERENCES "oauth2_clients" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "oauth2_refresh_tokens" ADD FOREIGN KEY ("user_id") REFERENCES "users" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "worker"
-- ----------------------------
ALTER TABLE "worker" ADD FOREIGN KEY ("post_id") REFERENCES "post" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
