--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.1
-- Dumped by pg_dump version 9.6.1

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: Attack; Type: TABLE; Schema: public; Owner: nhdhvzjtzgcbvw
--

CREATE TABLE "Attack" (
    attack_id integer NOT NULL,
    attack_name character varying(32),
    attack_hit integer,
    attack_dam integer,
    damage_type_id integer,
    "statusEffect_id" integer,
    attack_description text
);


ALTER TABLE "Attack" OWNER TO nhdhvzjtzgcbvw;

--
-- Name: Attack_attack_id_seq; Type: SEQUENCE; Schema: public; Owner: nhdhvzjtzgcbvw
--

CREATE SEQUENCE "Attack_attack_id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE "Attack_attack_id_seq" OWNER TO nhdhvzjtzgcbvw;

--
-- Name: Attack_attack_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nhdhvzjtzgcbvw
--

ALTER SEQUENCE "Attack_attack_id_seq" OWNED BY "Attack".attack_id;


--
-- Name: Class; Type: TABLE; Schema: public; Owner: nhdhvzjtzgcbvw
--

CREATE TABLE "Class" (
    class_id integer NOT NULL,
    monster_class character varying(32)
);


ALTER TABLE "Class" OWNER TO nhdhvzjtzgcbvw;

--
-- Name: Class_class_id_seq; Type: SEQUENCE; Schema: public; Owner: nhdhvzjtzgcbvw
--

CREATE SEQUENCE "Class_class_id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE "Class_class_id_seq" OWNER TO nhdhvzjtzgcbvw;

--
-- Name: Class_class_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nhdhvzjtzgcbvw
--

ALTER SEQUENCE "Class_class_id_seq" OWNED BY "Class".class_id;


--
-- Name: Damage Type; Type: TABLE; Schema: public; Owner: nhdhvzjtzgcbvw
--

CREATE TABLE "Damage Type" (
    "damageType_id" integer NOT NULL,
    damage_type character varying(32)
);


ALTER TABLE "Damage Type" OWNER TO nhdhvzjtzgcbvw;

--
-- Name: Damage Type_damageType_id_seq; Type: SEQUENCE; Schema: public; Owner: nhdhvzjtzgcbvw
--

CREATE SEQUENCE "Damage Type_damageType_id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE "Damage Type_damageType_id_seq" OWNER TO nhdhvzjtzgcbvw;

--
-- Name: Damage Type_damageType_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nhdhvzjtzgcbvw
--

ALTER SEQUENCE "Damage Type_damageType_id_seq" OWNED BY "Damage Type"."damageType_id";


--
-- Name: Monster; Type: TABLE; Schema: public; Owner: nhdhvzjtzgcbvw
--

CREATE TABLE "Monster" (
    monster_id integer NOT NULL,
    monster_name character varying(32),
    class_id integer,
    stat_id integer,
    attack_id integer,
    monster_description text,
    size_id integer
);


ALTER TABLE "Monster" OWNER TO nhdhvzjtzgcbvw;

--
-- Name: Monster_monster_id_seq; Type: SEQUENCE; Schema: public; Owner: nhdhvzjtzgcbvw
--

CREATE SEQUENCE "Monster_monster_id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE "Monster_monster_id_seq" OWNER TO nhdhvzjtzgcbvw;

--
-- Name: Monster_monster_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nhdhvzjtzgcbvw
--

ALTER SEQUENCE "Monster_monster_id_seq" OWNED BY "Monster".monster_id;


--
-- Name: Size; Type: TABLE; Schema: public; Owner: nhdhvzjtzgcbvw
--

CREATE TABLE "Size" (
    size_id integer NOT NULL,
    size_category character varying(32)
);


ALTER TABLE "Size" OWNER TO nhdhvzjtzgcbvw;

--
-- Name: Size_size_id_seq; Type: SEQUENCE; Schema: public; Owner: nhdhvzjtzgcbvw
--

CREATE SEQUENCE "Size_size_id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE "Size_size_id_seq" OWNER TO nhdhvzjtzgcbvw;

--
-- Name: Size_size_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nhdhvzjtzgcbvw
--

ALTER SEQUENCE "Size_size_id_seq" OWNED BY "Size".size_id;


--
-- Name: Stat; Type: TABLE; Schema: public; Owner: nhdhvzjtzgcbvw
--

CREATE TABLE "Stat" (
    stat_id integer NOT NULL,
    stat_hp integer,
    stat_mp integer,
    stat_ac integer,
    stat_init integer,
    stat_str integer,
    stat_dex integer,
    stat_con integer,
    stat_int integer,
    stat_wis integer,
    stat_cha integer
);


ALTER TABLE "Stat" OWNER TO nhdhvzjtzgcbvw;

--
-- Name: Status Effect; Type: TABLE; Schema: public; Owner: nhdhvzjtzgcbvw
--

CREATE TABLE "Status Effect" (
    "statusEffect_id" integer NOT NULL,
    status_effect character varying(32)
);


ALTER TABLE "Status Effect" OWNER TO nhdhvzjtzgcbvw;

--
-- Name: Status Effect_statusEffect_id_seq; Type: SEQUENCE; Schema: public; Owner: nhdhvzjtzgcbvw
--

CREATE SEQUENCE "Status Effect_statusEffect_id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE "Status Effect_statusEffect_id_seq" OWNER TO nhdhvzjtzgcbvw;

--
-- Name: Status Effect_statusEffect_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nhdhvzjtzgcbvw
--

ALTER SEQUENCE "Status Effect_statusEffect_id_seq" OWNED BY "Status Effect"."statusEffect_id";


--
-- Name: Attack attack_id; Type: DEFAULT; Schema: public; Owner: nhdhvzjtzgcbvw
--

ALTER TABLE ONLY "Attack" ALTER COLUMN attack_id SET DEFAULT nextval('"Attack_attack_id_seq"'::regclass);


--
-- Name: Class class_id; Type: DEFAULT; Schema: public; Owner: nhdhvzjtzgcbvw
--

ALTER TABLE ONLY "Class" ALTER COLUMN class_id SET DEFAULT nextval('"Class_class_id_seq"'::regclass);


--
-- Name: Damage Type damageType_id; Type: DEFAULT; Schema: public; Owner: nhdhvzjtzgcbvw
--

ALTER TABLE ONLY "Damage Type" ALTER COLUMN "damageType_id" SET DEFAULT nextval('"Damage Type_damageType_id_seq"'::regclass);


--
-- Name: Monster monster_id; Type: DEFAULT; Schema: public; Owner: nhdhvzjtzgcbvw
--

ALTER TABLE ONLY "Monster" ALTER COLUMN monster_id SET DEFAULT nextval('"Monster_monster_id_seq"'::regclass);


--
-- Name: Size size_id; Type: DEFAULT; Schema: public; Owner: nhdhvzjtzgcbvw
--

ALTER TABLE ONLY "Size" ALTER COLUMN size_id SET DEFAULT nextval('"Size_size_id_seq"'::regclass);


--
-- Name: Status Effect statusEffect_id; Type: DEFAULT; Schema: public; Owner: nhdhvzjtzgcbvw
--

ALTER TABLE ONLY "Status Effect" ALTER COLUMN "statusEffect_id" SET DEFAULT nextval('"Status Effect_statusEffect_id_seq"'::regclass);


--
-- Data for Name: Attack; Type: TABLE DATA; Schema: public; Owner: nhdhvzjtzgcbvw
--

COPY "Attack" (attack_id, attack_name, attack_hit, attack_dam, damage_type_id, "statusEffect_id", attack_description) FROM stdin;
\.


--
-- Name: Attack_attack_id_seq; Type: SEQUENCE SET; Schema: public; Owner: nhdhvzjtzgcbvw
--

SELECT pg_catalog.setval('"Attack_attack_id_seq"', 1, false);


--
-- Data for Name: Class; Type: TABLE DATA; Schema: public; Owner: nhdhvzjtzgcbvw
--

COPY "Class" (class_id, monster_class) FROM stdin;
\.


--
-- Name: Class_class_id_seq; Type: SEQUENCE SET; Schema: public; Owner: nhdhvzjtzgcbvw
--

SELECT pg_catalog.setval('"Class_class_id_seq"', 1, false);


--
-- Data for Name: Damage Type; Type: TABLE DATA; Schema: public; Owner: nhdhvzjtzgcbvw
--

COPY "Damage Type" ("damageType_id", damage_type) FROM stdin;
\.


--
-- Name: Damage Type_damageType_id_seq; Type: SEQUENCE SET; Schema: public; Owner: nhdhvzjtzgcbvw
--

SELECT pg_catalog.setval('"Damage Type_damageType_id_seq"', 1, false);


--
-- Data for Name: Monster; Type: TABLE DATA; Schema: public; Owner: nhdhvzjtzgcbvw
--

COPY "Monster" (monster_id, monster_name, class_id, stat_id, attack_id, monster_description, size_id) FROM stdin;
\.


--
-- Name: Monster_monster_id_seq; Type: SEQUENCE SET; Schema: public; Owner: nhdhvzjtzgcbvw
--

SELECT pg_catalog.setval('"Monster_monster_id_seq"', 1, false);


--
-- Data for Name: Size; Type: TABLE DATA; Schema: public; Owner: nhdhvzjtzgcbvw
--

COPY "Size" (size_id, size_category) FROM stdin;
\.


--
-- Name: Size_size_id_seq; Type: SEQUENCE SET; Schema: public; Owner: nhdhvzjtzgcbvw
--

SELECT pg_catalog.setval('"Size_size_id_seq"', 1, false);


--
-- Data for Name: Stat; Type: TABLE DATA; Schema: public; Owner: nhdhvzjtzgcbvw
--

COPY "Stat" (stat_id, stat_hp, stat_mp, stat_ac, stat_init, stat_str, stat_dex, stat_con, stat_int, stat_wis, stat_cha) FROM stdin;
\.


--
-- Data for Name: Status Effect; Type: TABLE DATA; Schema: public; Owner: nhdhvzjtzgcbvw
--

COPY "Status Effect" ("statusEffect_id", status_effect) FROM stdin;
\.


--
-- Name: Status Effect_statusEffect_id_seq; Type: SEQUENCE SET; Schema: public; Owner: nhdhvzjtzgcbvw
--

SELECT pg_catalog.setval('"Status Effect_statusEffect_id_seq"', 1, false);


--
-- Name: Attack Attack_pkey; Type: CONSTRAINT; Schema: public; Owner: nhdhvzjtzgcbvw
--

ALTER TABLE ONLY "Attack"
    ADD CONSTRAINT "Attack_pkey" PRIMARY KEY (attack_id);


--
-- Name: Class Class_pkey; Type: CONSTRAINT; Schema: public; Owner: nhdhvzjtzgcbvw
--

ALTER TABLE ONLY "Class"
    ADD CONSTRAINT "Class_pkey" PRIMARY KEY (class_id);


--
-- Name: Damage Type Damage Type_pkey; Type: CONSTRAINT; Schema: public; Owner: nhdhvzjtzgcbvw
--

ALTER TABLE ONLY "Damage Type"
    ADD CONSTRAINT "Damage Type_pkey" PRIMARY KEY ("damageType_id");


--
-- Name: Monster Monster_pkey; Type: CONSTRAINT; Schema: public; Owner: nhdhvzjtzgcbvw
--

ALTER TABLE ONLY "Monster"
    ADD CONSTRAINT "Monster_pkey" PRIMARY KEY (monster_id);


--
-- Name: Size Size_pkey; Type: CONSTRAINT; Schema: public; Owner: nhdhvzjtzgcbvw
--

ALTER TABLE ONLY "Size"
    ADD CONSTRAINT "Size_pkey" PRIMARY KEY (size_id);


--
-- Name: Stat Stat_pkey; Type: CONSTRAINT; Schema: public; Owner: nhdhvzjtzgcbvw
--

ALTER TABLE ONLY "Stat"
    ADD CONSTRAINT "Stat_pkey" PRIMARY KEY (stat_id);


--
-- Name: Status Effect Status Effect_pkey; Type: CONSTRAINT; Schema: public; Owner: nhdhvzjtzgcbvw
--

ALTER TABLE ONLY "Status Effect"
    ADD CONSTRAINT "Status Effect_pkey" PRIMARY KEY ("statusEffect_id");


--
-- Name: Monster attack_fk; Type: FK CONSTRAINT; Schema: public; Owner: nhdhvzjtzgcbvw
--

ALTER TABLE ONLY "Monster"
    ADD CONSTRAINT attack_fk FOREIGN KEY (attack_id) REFERENCES "Attack"(attack_id);


--
-- Name: Monster class_fk; Type: FK CONSTRAINT; Schema: public; Owner: nhdhvzjtzgcbvw
--

ALTER TABLE ONLY "Monster"
    ADD CONSTRAINT class_fk FOREIGN KEY (class_id) REFERENCES "Class"(class_id);


--
-- Name: Attack damage_type_fk; Type: FK CONSTRAINT; Schema: public; Owner: nhdhvzjtzgcbvw
--

ALTER TABLE ONLY "Attack"
    ADD CONSTRAINT damage_type_fk FOREIGN KEY (damage_type_id) REFERENCES "Damage Type"("damageType_id");


--
-- Name: Monster size_fk; Type: FK CONSTRAINT; Schema: public; Owner: nhdhvzjtzgcbvw
--

ALTER TABLE ONLY "Monster"
    ADD CONSTRAINT size_fk FOREIGN KEY (size_id) REFERENCES "Size"(size_id);


--
-- Name: Monster stat_fk; Type: FK CONSTRAINT; Schema: public; Owner: nhdhvzjtzgcbvw
--

ALTER TABLE ONLY "Monster"
    ADD CONSTRAINT stat_fk FOREIGN KEY (stat_id) REFERENCES "Stat"(stat_id);


--
-- Name: Attack status_fk; Type: FK CONSTRAINT; Schema: public; Owner: nhdhvzjtzgcbvw
--

ALTER TABLE ONLY "Attack"
    ADD CONSTRAINT status_fk FOREIGN KEY ("statusEffect_id") REFERENCES "Status Effect"("statusEffect_id");


--
-- Name: public; Type: ACL; Schema: -; Owner: nhdhvzjtzgcbvw
--

REVOKE ALL ON SCHEMA public FROM postgres;
REVOKE ALL ON SCHEMA public FROM PUBLIC;
GRANT ALL ON SCHEMA public TO nhdhvzjtzgcbvw;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- Name: plpgsql; Type: ACL; Schema: -; Owner: postgres
--

GRANT ALL ON LANGUAGE plpgsql TO nhdhvzjtzgcbvw;


--
-- PostgreSQL database dump complete
--

