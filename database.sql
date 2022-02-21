CREATE TABLE IF NOT EXISTS public.address_on
(
    pk_address integer NOT NULL GENERATED ALWAYS AS IDENTITY ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 2147483647 CACHE 1 ),
    address_public_place character varying(250) COLLATE pg_catalog."default",
    address_number integer,
    address_district character varying(150) COLLATE pg_catalog."default",
    address_cep integer,
    fk_address_company integer,
    fk_address_employee integer,
    fk_address_vehicle integer,
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
    company_cnpj bigint,
    company_observation text COLLATE pg_catalog."default",
    company_activity character varying(250) COLLATE pg_catalog."default",
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
    fk_distance_employee integer,
    fk_distance_vehicle integer,
    fk_distance_company integer,
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
    employee_cpf bigint,
    employee_rg bigint,
    employee_working_hours interval,
    employee_admission_date date,
    employee_cnh_number bigint,
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
    fk_maintenance_employee integer,
    fk_maintenance_vehicle integer,
    fk_maintenance_company integer,
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
    vehicle_kilometer bigint,
    vehicle_fuel character varying(150) COLLATE pg_catalog."default",
    vehicle_doors integer,
    vehicle_streaming character varying(50) COLLATE pg_catalog."default",
    vehicle_tire_rim character varying(8) COLLATE pg_catalog."default",
    vehicle_tire_brand character varying(150) COLLATE pg_catalog."default",
    vehicle_lamps character varying(5) COLLATE pg_catalog."default",
    vehicle_observation text COLLATE pg_catalog."default",
    vehicle_model_year integer,
    vehicle_year_manufacture integer,
    vehicle_license_plate character varying(10) COLLATE pg_catalog."default",
    CONSTRAINT vehicle_pkey PRIMARY KEY (pk_vehicle),
    CONSTRAINT vehicle_pk_vehicle_key UNIQUE (pk_vehicle)
)

####################

INSERT INTO public.company(
	pk_company, company_name, company_cnpj, company_activity, company_observation)
	VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) RETURNING id;

INSERT INTO public.address_on(
	pk_address, address_public_place, address_number, address_district, address_cep, fk_address_company, fk_address_employee, fk_address_vehicle)
	VALUES (?, ?, ?, ?, ?, ?, ?, ?);

WITH company_key AS
(INSERT INTO company (company_name, company_cnpj, company_activity, company_observation) 
VALUES ('Auto Elétrica do Pedrão', 67453453000154, 'Posto de Abastecimento', 'Não sei') RETURNING pk_company)
INSERT INTO address_on (address_public_place, address_number, address_district, address_cep, fk_address_company)
SELECT 'Rua Oito', 209, 'Jardim Manaus', 19912789, company_key.pk_company
FROM company_key;

SELECT * FROM public.address_on AS A 
INNER JOIN public.company AS C ON A.fk_address_company = C.pk_company;

####################

INSERT INTO public.employee(
	pk_employee, employee_fist_name, employee_last_name, employee_education, employee_cpf, employee_rg, employee_working_hours, employee_admission_date, employee_cnh_number, employee_cnh_date, employee_observation)
	VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);

INSERT INTO public.address_on(
	pk_address, address_public_place, address_number, address_district, address_cep, fk_address_company, fk_address_employee, fk_address_vehicle)
	VALUES (?, ?, ?, ?, ?, ?, ?, ?);

WITH employee_key AS
(INSERT INTO employee (employee_fist_name, employee_last_name, employee_education, employee_cpf, employee_rg, employee_working_hours, employee_admission_date, employee_cnh_number, employee_cnh_date, employee_observation) 
VALUES ('Pedro', 'da Silva', 'Mestrado', 87634523432, 238769879, '160 hours', '2020-11-27', 128765679845, '2004-03-08', '') RETURNING pk_employee)
INSERT INTO address_on (address_public_place, address_number, address_district, address_cep, fk_address_employee)
SELECT 'Rua Jabuti', 787, 'Vila Dumond', 19913337, employee_key.pk_employee
FROM employee_key;

SELECT * FROM public.address_on AS A 
INNER JOIN public.employee AS E ON A.fk_address_employee = E.pk_employee;

#####################

INSERT INTO public.vehicle(
	pk_vehicle, vehicle_model, vehicle_brand, vehicle_color, vehicle_kilometer, vehicle_fuel, vehicle_streaming, vehicle_tire_rim, vehicle_tire_brand, vehicle_lamps, vehicle_observation, vehicle_model_year, vehicle_year_manufacture, vehicle_license_plate, vehicle_doors)
	VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);

INSERT INTO public.address_on(
	pk_address, address_public_place, address_number, address_district, address_cep, fk_address_company, fk_address_employee, fk_address_vehicle)
	VALUES (?, ?, ?, ?, ?, ?, ?, ?);

WITH vehicle_key AS
(INSERT INTO vehicle (vehicle_model, vehicle_brand, vehicle_color, vehicle_kilometer, vehicle_fuel, vehicle_streaming, vehicle_tire_rim, vehicle_tire_brand, vehicle_lamps, vehicle_observation, vehicle_model_year, vehicle_year_manufacture, vehicle_license_plate, vehicle_doors) 
VALUES ('Arco', 'Fiat', 'Branco', 66745, 'Gasolina/Etanol', 4, 'Semiautomático', 'Aro 17', 'Pirelli', 'HB3', '', 2012, 2011, 'U76TF3') RETURNING pk_vehicle)
INSERT INTO address_on (address_public_place, address_number, address_district, address_cep, fk_address_vehicle)
SELECT 'Rua Sete', 87, 'Vila Olimpia', 19923237, vehicle_key.pk_vehicle
FROM vehicle_key;

SELECT * FROM public.address_on AS A 
INNER JOIN public.vehicle AS V ON A.fk_address_vehicle = V.pk_vehicle;

#####################

WITH    
venda AS (insert into venda(inicio) values (now()) returning id), 
item as (insert into item(nome) values ('batata-frita') returning id), 
participante as(insert into participante(nome) values ('Anselmo') returning id)

insert into lances_vendas(venda_id, item_id, participante_id, valor) 
select *, 100 from venda, item, participante;

SELECT * FROM public.distance AS D 
INNER JOIN public.employee AS E ON E.pk_employee = D.fk_distance_employee
INNER JOIN public.vehicle AS V ON V.pk_vehicle = D.fk_distance_vehicle
INNER JOIN public.company AS C ON C.pk_company = D.fk_distance_company;
	