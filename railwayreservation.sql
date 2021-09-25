use railwayreservation;

create table user(
`user_id`int not null auto_increment,
`username` varchar(20) not null,
`email` varchar (100) not null,
`password` varchar (30) not null,
primary key(`user_id`)
);



create table train(
`no` int not null,
`name` varchar(20) not null,
`source` varchar(20),
`destination` varchar (20),
`status` varchar(20) default 'on time',
`no_of_seats` int,
primary key(`no`)
);

create table passenger(
`p_id` int auto_increment not null,
`f_name` varchar (20) not null,
`m_name` varchar (20) default null,
`last name` varchar(20) not null,
`age` int,
`phone` varchar(10),
`t_no` int,
primary key(`p_id`)
);

create table ticket(
`pnr` int not null,
`date_of_travel` datetime not null,
`coach` varchar(5) not null,
`seatno` varchar(5) not null,
`t_no` int,
primary key(`pnr`)
);




alter table ticket 
add foreign key(`t_no`) references train(`no`);
insert into ticket values(123,'2021-05-05',"A6","3C",12);

