drop table if exists item;
create table item (    
    id integer not null primary key autoincrement,    
    summary varchar(80) not null,    
    rego varchar(6) not null,
    years varchar(4) not null,
    odometer varchar(20) not null,
    picture varchar(80) not null,
    color varchar(10) not null
); 
insert into item values (null, "Hyundai Veloster", "AC1HL2", "2021", "12421", "veloster.jpg", "White");
insert into item values (null, "Mzada Mazda3", "B2A1H5", "2021", "2131", "mazda3.jpg", "Red");
insert into item values (null, "Nissan Sentra", "WS1N1D", "2021", "24112", "sentra.jpg", "White");
insert into item values (null, "Subaru wrx sti", "XSWL12", "2021", "9090", "wrx_sti.jpg", "Silver");
insert into item values (null, "Toyota 4runner", "WIZ01A", "2021", "4213", "4runner.jpg", "Black");
insert into item values (null, "Toyota Avalon","WIOZ22", "2021", "4921", "avalon.jpg", "Black");
insert into item values (null, "Volkswagen Jetta","XICOZ1", "2021", "12110", "jetta.jpg", "Red");
insert into item values (null, "Toyota Corolla","DW231A", "2022", "2910", "corolla.jpg", "White");
insert into item values (null, "Toyota Prius","SIWOZ2", "2022", "7921", "prius.jpg", "Silver");




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