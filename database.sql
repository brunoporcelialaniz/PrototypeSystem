CREATE TABLE IF NOT EXISTS public.address_on
(
    pk_address integer NOT NULL GENERATED ALWAYS AS IDENTITY ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 2147483647 CACHE 1 ),
    address_public_place character varying(250) COLLATE pg_catalog."default",
    address_number integer,
    address_district character varying(150) COLLATE pg_catalog."default",
    address_cep integer,
    fk_address_company integer NOT NULL,
    fk_address_employee integer NOT NULL,
    fk_address_vehicle integer NOT NULL,
    CONSTRAINT address_on_pkey PRIMARY KEY (pk_address),
    CONSTRAINT address_on_pk_address_key UNIQUE (pk_address),
    CONSTRAINT fk_address_compary UNIQUE (fk_address_company, fk_address_vehicle, fk_address_employee),
    CONSTRAINT address_on_fk_address_company_fkey FOREIGN KEY (fk_address_company)
        REFERENCES public.company (pk_company) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
        NOT VALID,
    CONSTRAINT address_on_fk_address_employee_fkey FOREIGN KEY (fk_address_employee)
        REFERENCES public.employee (pk_employee) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
        NOT VALID,
    CONSTRAINT address_on_fk_address_vehicle_fkey FOREIGN KEY (fk_address_vehicle)
        REFERENCES public.vehicle (pk_vehicle) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
        NOT VALID
)

CREATE TABLE IF NOT EXISTS public.company
(
    pk_company integer NOT NULL GENERATED ALWAYS AS IDENTITY ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 2147483647 CACHE 1 ),
    company_name character varying(250) COLLATE pg_catalog."default",
    company_cnpj integer,
    company_mechanil boolean,
    company_electrical boolean,
    company_painting boolean,
    company_tapestry boolean,
    company_tire boolean,
    company_vehicle boolean,
    company_gas_station boolean,
    company_observation text COLLATE pg_catalog."default",
    CONSTRAINT company_pkey PRIMARY KEY (pk_company),
    CONSTRAINT company_pk_company_key UNIQUE (pk_company)
)

CREATE TABLE IF NOT EXISTS public.distance
(
    pk_distance integer NOT NULL GENERATED ALWAYS AS IDENTITY ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 2147483647 CACHE 1 ),
    distance_value double precision,
    distance_number integer,
    distance_input integer,
    distance_exit integer,
    distance_date_input date,
    distance_date_exit date,
    fk_distance_employee integer NOT NULL,
    fk_distance_vehicle integer NOT NULL,
    fk_distance_company integer NOT NULL,
    distance_observation text COLLATE pg_catalog."default",
    CONSTRAINT distance_pkey PRIMARY KEY (pk_distance),
    CONSTRAINT distance_fk_distance_employee_fk_distance_vehicle_fk_distan_key UNIQUE (fk_distance_employee, fk_distance_vehicle, fk_distance_company),
    CONSTRAINT distance_pk_distance_key UNIQUE (pk_distance),
    CONSTRAINT distance_fk_distance_company_fkey FOREIGN KEY (fk_distance_company)
        REFERENCES public.company (pk_company) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
        NOT VALID,
    CONSTRAINT distance_fk_distance_employee_fkey FOREIGN KEY (fk_distance_employee)
        REFERENCES public.employee (pk_employee) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
        NOT VALID,
    CONSTRAINT distance_fk_distance_vehicle_fkey FOREIGN KEY (fk_distance_vehicle)
        REFERENCES public.vehicle (pk_vehicle) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
        NOT VALID
)

CREATE TABLE IF NOT EXISTS public.employee
(
    pk_employee integer NOT NULL GENERATED ALWAYS AS IDENTITY ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 2147483647 CACHE 1 ),
    employee_fist_name character varying(150) COLLATE pg_catalog."default",
    employee_last_name character varying(250) COLLATE pg_catalog."default",
    employee_education character varying(150) COLLATE pg_catalog."default",
    employee_cpf integer,
    employee_rg integer,
    employee_working_hours time without time zone,
    employee_admission_date date,
    employee_cnh_number integer,
    employee_cnh_date date,
    employee_observation text COLLATE pg_catalog."default",
    CONSTRAINT employee_pkey PRIMARY KEY (pk_employee),
    CONSTRAINT employee_pk_employee_key UNIQUE (pk_employee)
)

CREATE TABLE IF NOT EXISTS public.maintenance
(
    pk_maintenance integer NOT NULL GENERATED ALWAYS AS IDENTITY ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 2147483647 CACHE 1 ),
    maintenance_mechanil boolean,
    maintenance_electrical boolean,
    maintenance_painting boolean,
    maintenance_tapestry boolean,
    maintenance_tire boolean,
    maintenance_vehicle boolean,
    maintenance_others boolean,
    maintenance_date_input date,
    maintenance_date_exit date,
    fk_maintenance_employee integer NOT NULL,
    fk_maintenance_vehicle integer NOT NULL,
    fk_maintenance_company integer NOT NULL,
    maintenance_observation text COLLATE pg_catalog."default",
    CONSTRAINT maintenance_pkey PRIMARY KEY (pk_maintenance),
    CONSTRAINT maintenance_fk_maintenance_employee_fk_maintenance_vehicle__key UNIQUE (fk_maintenance_employee, fk_maintenance_vehicle, fk_maintenance_company),
    CONSTRAINT maintenance_pk_maintenance_key UNIQUE (pk_maintenance),
    CONSTRAINT maintenance_fk_maintenance_company_fkey FOREIGN KEY (fk_maintenance_company)
        REFERENCES public.company (pk_company) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
        NOT VALID,
    CONSTRAINT maintenance_fk_maintenance_employee_fkey FOREIGN KEY (fk_maintenance_employee)
        REFERENCES public.employee (pk_employee) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
        NOT VALID,
    CONSTRAINT maintenance_fk_maintenance_vehicle_fkey FOREIGN KEY (fk_maintenance_vehicle)
        REFERENCES public.vehicle (pk_vehicle) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
        NOT VALID
)

CREATE TABLE IF NOT EXISTS public.vehicle
(
    pk_vehicle integer NOT NULL GENERATED ALWAYS AS IDENTITY ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 2147483647 CACHE 1 ),
    vehicle_model character varying(150) COLLATE pg_catalog."default",
    vehicle_brand character varying(150) COLLATE pg_catalog."default",
    vehicle_color character varying(150) COLLATE pg_catalog."default",
    vehicle_kilometer integer,
    vehicle_fuel character varying(150) COLLATE pg_catalog."default",
    vehicle_manufacturing integer,
    vehicle_board character varying(50) COLLATE pg_catalog."default",
    vehicle_doors integer,
    vehicle_streaming character varying(50) COLLATE pg_catalog."default",
    vehicle_tire_rim character varying(8) COLLATE pg_catalog."default",
    vehicle_tire_brand character varying(150) COLLATE pg_catalog."default",
    vehicle_lamps character varying(5) COLLATE pg_catalog."default",
    vehicle_observation text COLLATE pg_catalog."default",
    CONSTRAINT vehicle_pkey PRIMARY KEY (pk_vehicle),
    CONSTRAINT vehicle_pk_vehicle_key UNIQUE (pk_vehicle)
)

TABLESPACE pg_default;

INSERT INTO public.company(
	pk_company, company_name, company_cnpj, company_mechanil, company_electrical, company_painting, company_tapestry, company_tire, company_vehicle, company_gas_station, company_observation)
	VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) RETURNING id;

INSERT INTO public.address_on(
	pk_address, address_public_place, address_number, address_district, address_cep, fk_address_company, fk_address_employee, fk_address_vehicle)
	VALUES (?, ?, ?, ?, ?, ?, ?, ?);

####################

WITH company_key AS
        (INSERT INTO company (company_name, company_cnpj, company_mechanil, company_electrical, company_painting, company_tapestry, company_tire, company_vehicle, company_gas_station, company_observation) 
            VALUES ('Auto Elétrica do Pedrão', 67453453000154, 'TRUE', 'TRUE', 'TRUE', 'TRUE', 'TRUE', 'TRUE', 'TRUE', 'Não sei') RETURNING pk_company)
INSERT INTO address_on (address_public_place, address_number, address_district, address_cep, fk_address_company)
   SELECT 'Rua Oito', 856, 'Vila Paris', 19912789, company_key.pk_company
   FROM company_key;