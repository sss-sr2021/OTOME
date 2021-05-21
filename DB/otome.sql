--
-- PostgreSQL database dump
--

-- Dumped from database version 11.0
-- Dumped by pg_dump version 11.0

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: point; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.point (
    id integer NOT NULL,
    user_id integer NOT NULL,
    point integer
);


ALTER TABLE public.point OWNER TO postgres;

--
-- Name: point_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.point_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.point_id_seq OWNER TO postgres;

--
-- Name: point_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.point_id_seq OWNED BY public.point.id;


--
-- Name: recipe; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.recipe (
    id integer NOT NULL,
    recipe_type text,
    recipe text NOT NULL,
    recipe_file text
);


ALTER TABLE public.recipe OWNER TO postgres;

--
-- Name: recipe_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.recipe_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.recipe_id_seq OWNER TO postgres;

--
-- Name: recipe_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.recipe_id_seq OWNED BY public.recipe.id;


--
-- Name: step; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.step (
    id integer NOT NULL,
    user_id integer NOT NULL,
    step integer
);


ALTER TABLE public.step OWNER TO postgres;

--
-- Name: step_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.step_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.step_id_seq OWNER TO postgres;

--
-- Name: step_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.step_id_seq OWNED BY public.step.id;


--
-- Name: users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.users (
    id integer NOT NULL,
    name text NOT NULL,
    email text NOT NULL,
    password character varying(100) NOT NULL,
    birthday date NOT NULL,
    height real,
    weight real,
    target_weight real
);


ALTER TABLE public.users OWNER TO postgres;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO postgres;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- Name: point id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.point ALTER COLUMN id SET DEFAULT nextval('public.point_id_seq'::regclass);


--
-- Name: recipe id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.recipe ALTER COLUMN id SET DEFAULT nextval('public.recipe_id_seq'::regclass);


--
-- Name: step id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.step ALTER COLUMN id SET DEFAULT nextval('public.step_id_seq'::regclass);


--
-- Name: users id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- Data for Name: point; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.point (id, user_id, point) FROM stdin;
\.


--
-- Data for Name: recipe; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.recipe (id, recipe_type, recipe, recipe_file) FROM stdin;
1	1	ハンバーグ	ハンバーグ_1.png
2	2	冷しゃぶサラダ	冷しゃぶサラダ_2.png
\.


--
-- Data for Name: step; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.step (id, user_id, step) FROM stdin;
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.users (id, name, email, password, birthday, height, weight, target_weight) FROM stdin;
1	山田花子	hanako@otome.jp	1111	1998-07-03	165	42	40
2	田中明子	akiko@otome.jp	2222	1999-01-21	158	46	42
3	佐藤 朋子	tomoko@otome.jp	3333	1997-07-17	\N	\N	\N
4	畑中 由紀	yuki@otome.jp	4444	1987-04-30	\N	\N	\N
5	清中 亜子	ako@otome.jp	5555	1995-07-30	\N	\N	\N
6	若林 優子	yuko@otome.jp	6666	1993-04-20	\N	\N	\N
7	葛原　沙喜子	sakiko@otome.jp	7777	1992-01-04	\N	\N	\N
8	中谷 尚央子	naoko@otome.jp	8888	1995-06-14	169	55	52
9	廣芝 圭子	keiko@otome.jp	$2y$10$vpzEi8DWusJWhm/d1j9y5OZcGI7uwtan08l/0QzgXKz.n9BAZup7q	1994-10-13	178	57	55
11	深水 丹佳子	takako@otome.jp	$2y$10$AMwcQTKexQqir.Z4LZ1uceZX7VQWlJyHqOAX4fDjF6CAnG/VUv9F.	1998-08-20	0	0	0
12	深水 丹佳子	takako@otome.jp	$2y$10$c3YR1M9N40sg8QeA3HEkIe69Cf.QSWJEmzZDt3IaBUCQcx81iOVum	1998-08-20	0	0	0
13	深水 丹佳子	takako@otome.jp	$2y$10$W2xPP.M/mDwPJXhsx1KKyeYHmYTYdVZR5VIXaScI4j2USt/jpda/.	1998-08-20	0	0	0
14	大多和 瑞子	mizuko@otome.jp	$2y$10$2xyKvR5o1S93RDs8ulrGXuAXa.T5m0p4DTEDXMzDAv8YiFNcJqRrC	2021-04-26	152.899994	0	0
15	山下 克子	katsuko@otome.jp	$2y$10$nKAiCARFC4b6/7463mW7rOYnbftQtU4CQOlu4T6BuebHLUMAI9TYS	2021-04-27	0	0	0
16	花岡 今日子	kyoko@otome.jp	$2y$10$ouEZCilqTVzOAUWY6w/xIeul5uEgRoKFy71ZMylpRLhpzDNK2MPmi	2021-04-26	0	0	0
17	前 奈津子	natsuko@otome.jp	$2y$10$kONt4MM76KooI0xEWDSwv..hnxoDMiIi7RnsvZMR2NyM2BjbPSBK6	1996-06-04	160	43	43
\.


--
-- Name: point_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.point_id_seq', 1, false);


--
-- Name: recipe_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.recipe_id_seq', 1, false);


--
-- Name: step_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.step_id_seq', 1, false);


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.users_id_seq', 17, true);


--
-- Name: point point_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.point
    ADD CONSTRAINT point_pkey PRIMARY KEY (id);


--
-- Name: recipe recipe_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.recipe
    ADD CONSTRAINT recipe_pkey PRIMARY KEY (id);


--
-- Name: step step_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.step
    ADD CONSTRAINT step_pkey PRIMARY KEY (id);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- PostgreSQL database dump complete
--

