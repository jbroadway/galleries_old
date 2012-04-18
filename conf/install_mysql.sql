create table galleries (
	id int not null auto_increment primary key,
	sort int not null,
	ts datetime not null,
	title char(48) not null,
	cover int not null,
	index (sort)
);

create table galleries_image (
	id int not null auto_increment primary key,
	gallery int not null,
	sort int not null,
	ts datetime not null,
	image char(72) not null,
	title char(48) not null,
	description text not null,
	index (gallery, sort)
);
