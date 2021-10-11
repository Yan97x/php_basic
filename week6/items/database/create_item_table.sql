drop table if exists item;
create table item (    
    id integer not null primary key autoincrement,    
    summary varchar(80) not null,    
    rego varchar(6) not null,
    years varchar(4) not null,
    odometer varchar(20) not null,
    picture varchar(80) not null,
    color varchar(10) not null,
    cartimes integer(5)
); 
insert into item values (null, "Hyundai Veloster", "AC1HL2", "2021", "12421", "veloster.jpg", "White", 0);
insert into item values (null, "Mzada Mazda3", "B2A1H5", "2021", "2131", "mazda3.jpg", "Red", 0);
insert into item values (null, "Nissan Sentra", "WS1N1D", "2021", "24112", "sentra.jpg", "White", 0);
insert into item values (null, "Subaru wrx sti", "XSWL12", "2021", "9090", "wrx_sti.jpg", "Silver", 0);
insert into item values (null, "Toyota 4runner", "WIZ01A", "2021", "4213", "4runner.jpg", "Black", 0);
insert into item values (null, "Toyota Avalon","WIOZ22", "2021", "4921", "avalon.jpg", "Black", 0);
insert into item values (null, "Volkswagen Jetta","XICOZ1", "2021", "12110", "jetta.jpg", "Red", 0);
insert into item values (null, "Toyota Corolla","DW231A", "2022", "2910", "corolla.jpg", "White", 0);
insert into item values (null, "Toyota Prius","SIWOZ2", "2022", "7921", "prius.jpg", "Silver", 0);




drop table if exists client;
create table client (    
    id integer not null primary key autoincrement,    
    names varchar(20) not null,    
    age varchar(2) not null,
    phone varchar(10) not null,
    license varchar(20) not null,
    licenseType varchar(20) not null
); 
insert into client values (null, "Liam", "20", "0453214052", "25230984", "C");
insert into client values (null, "Olivia", "22", "0421241523", "21342579", "C");
insert into client values (null, "Emma", "30", "0421342156", "20949201", "C");
insert into client values (null, "Noah", "35", "0421352301", "25920192", "C");
insert into client values (null, "Elijah", "21", "0495920192", "22910586", "C");
insert into client values (null, "Oliver", "19", "0492013928", "29105829", "C");



drop table if exists booking;
create table booking (    
    id integer not null primary key autoincrement,    
    names varchar(20) not null,
    rego varchar(6) not null,
    license varchar(20) not null,
    starting varchar(20) not null,
    returning varchar(20) not null
); 


CREATE TABLE Statistic (
    OBJECTID INTEGER PRIMARY KEY,
    ACCIDENT_NO CHAR(12),
    ABS_CODE VARCHAR(100),
    ACCIDENT_STATUS VARCHAR(100),
    ACCIDENT_DATE VARCHAR(20),
    ACCIDENT_TIME VARCHAR(10),
    ALCOHOLTIME TEXT CHECK( ALCOHOLTIME IN ('Yes','NO') ) DEFAULT 'No',
    ACCIDENT_TYPE VARCHAR(100),
    DAY_OF_WEEK VARCHAR(100), 
    DCA_CODE VARCHAR(100),
    HIT_RUN_FLAG TEXT CHECK( HIT_RUN_FLAG IN ('Yes','NO') ) DEFAULT 'No',
    LIGHT_CONDITION VARCHAR(100),
    POLICE_ATTEND TEXT CHECK( POLICE_ATTEND IN ('Yes','NO') ) DEFAULT 'No',
    ROAD_GEOMETRY VARCHAR(100),
    SEVERITY VARCHAR(100),
    SPEED_ZONE VARCHAR(100),
    RUN_OFFROAD TEXT CHECK( RUN_OFFROAD IN ('Yes','NO') ) DEFAULT 'No',
    NODE_ID INTEGER,
    LONGITUDE FLOAT,
    LATITUDE FLOAT,
    NODE_TYPE VARCHAR(100),
    LGA_NAME VARCHAR(100),
    REGION_NAME VARCHAR(100),
    VICGRID_X FLOAT,
    VICGRID_Y FLOAT,
    TOTAL_PERSONS INTEGER,
    INJ_OR_FATAL INTEGER,
    FATALITY INTEGER,
    SERIOUSINJURY INTEGER,
    OTHERINJURY INTEGER,
    NONINJURED INTEGER,
    MALES INTEGER,
    FEMALES INTEGER,
    BICYCLIST INTEGER,
    PASSENGER INTEGER,
    DRIVER INTEGER,
    PEDESTRIAN INTEGER,
    PILLION INTEGER,
    MOTORIST INTEGER,
    UNKNOWN INTEGER,
    PED_CYCLIST_5_12 INTEGER,
    PED_CYCLIST_13_18 INTEGER,
    OLD_PEDESTRIAN INTEGER,
    OLD_DRIVER INTEGER,
    YOUNG_DRIVER INTEGER,
    ALCOHOL_RELATED TEXT CHECK( RUN_OFFROAD IN ('Yes','NO') ) DEFAULT 'No',
    UNLICENCSED INTEGER,
    NO_OF_VEHICLES INTEGER,
    HEAVYVEHICLE INTEGER,
    PASSENGERVEHICLE INTEGER,
    MOTORCYCLE INTEGER,
    PUBLICVEHICLE INTEGER,
    DEG_URBAN_NAME VARCHAR(100),
    DEG_URBAN_ALL VARCHAR(100),
    LGA_NAME_ALL VARCHAR(100),
    REGION_NAME_ALL VARCHAR(300),
    SRNS VARCHAR(100),
    SRNS_ALL VARCHAR(100),
    RMA VARCHAR(100),
    RMA_ALL VARCHAR(100),
    DIVIDED VARCHAR(100),
    DIVIDED_ALL VARCHAR(100),
    STAT_DIV_NAME VARCHAR(100)
);