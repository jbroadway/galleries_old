create table galleries (
	id integer primary key,
	sort int not null,
	ts datetime not null,
	title char(48) not null,
	cover int not null,
	index (sort)
);

create table galleries_image (
	id integer primary key,
	gallery int not null,
	sort int not null,
	ts datetime not null,
	image char(72) not null,
	title char(48) not null,
	description text not null,
	index (gallery, sort)
);

create index galleries_sort on galleries (sort);
create index galleries_image_sort on galleries_image (gallery, sort);
