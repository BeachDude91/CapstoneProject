/* 
	 Nicholas MacFarland
     03/04/20
     CSIS 474-B01
     Tennis Hubb Database
     Description:
        This is the "Tennis Hubb" database that holds the 
			tables. The only thing being inserted is into the
			member table, which is "customer" as username, 
			"customer" for the password, and a random email.
			
			
						******* NOTE **********
			
			-To sign into my site, you need to execute this database onto your
				computer.
*/

drop database if exists Tennis_Hubb;
create database Tennis_Hubb;

use Tennis_Hubb;


 
	/* **********************************************
	*             Inventory Table                   *
	*********************************************** */
DROP TABLE IF EXISTS Inventory_Table;
CREATE TABLE Inventory_Table 
(
  Inventory_ID INTEGER NOT NULL AUTO_INCREMENT,
  Name_of_Item VARCHAR(45) NOT NULL,
  Quantity VARCHAR(30) NOT NULL,
  Price FLOAT NOT NULL,
  Product_Image TEXT NOT NULL,
  
  constraint pk_inv_ID PRIMARY KEY(Inventory_ID)
);  


/* **********************************************
*  Member Table                                 *
*********************************************** */
DROP TABLE IF EXISTS Member_Table;
CREATE TABLE Member_Table
(
	Member_ID INTEGER NOT NULL AUTO_INCREMENT,
	username VARCHAR(100) NOT NULL,
	Fname VARCHAR(50) NOT NULL,
	Lname VARCHAR(50) NOT NULL,
	password VARCHAR(40) NOT NULL,
	email varchar(50) NOT NULL,
	
	constraint pk_menber_id primary key(Member_ID)
)ENGINE MyISAM;


/* **********************************************
*  Contact Table                                *
*********************************************** */
DROP TABLE IF EXISTS Contact_Table;
CREATE TABLE Contact_Table
(
	Contact_ID INTEGER NOT NULL AUTO_INCREMENT,
	member_id INTEGER NOT NULL,
	firstname VARCHAR(50) NOT NULL,
	lastname VARCHAR(50) NOT NULL,	
	Email_Address VARCHAR(150) NOT NULL,
	Feedback varchar(200) NOT NULL,
	
	constraint pk_Contact_ID primary key (Contact_ID),
	constraint fk_member_id foreign key (member_id) references Member_Table(Member_ID)
)ENGINE MyISAM;


	/* ********************************************
	*  	       Shopping Cart Header Table                *
	*********************************************** */   
DROP TABLE IF EXISTS Shopping_Cart_Header_Table;
CREATE TABLE Shopping_Cart_Header_Table
(
	Shopping_Cart_ID INTEGER NOT NULL AUTO_INCREMENT,
	member_id INTEGER NOT NULL,
	
	constraint pk_shop_cart_header_id primary key(Shopping_Cart_ID),
	constraint fk_member_id foreign key(member_id) references Member_Table(Member_ID)
	
)ENGINE MyISAM; 


	/* ********************************************
	*  	       Shopping Cart Table                *
	*********************************************** */   
DROP TABLE IF EXISTS Shopping_Cart_Table;
CREATE TABLE Shopping_Cart_Table
(
	Shopping_Cart_id INTEGER NOT NULL,				/* ALSO FOREIGN KEY */
	Inventory_id INTEGER NOT NULL,				/* ALSO FOREIGN KEY */
	quantity INTEGER NOT NULL,
	
	constraint pk_shopping_cart_id primary key(Shopping_Cart_id,Inventory_ID),
	constraint fk_Shopping_Cart_ID foreign key(Shopping_Cart_id) references Shopping_Cart_Header_Table(Shopping_Cart_ID),
	constraint fk_inventory_id foreign key(Inventory_id) references Inventory_Table(Inventory_ID)
)ENGINE MyISAM; 


/* ***********************************************
*   Card Info Table                              *
*********************************************** */
DROP TABLE IF EXISTS Card_Info_Table;
CREATE TABLE Card_Info_Table
(
	credit_card_id INTEGER NOT NULL AUTO_INCREMENT, 
	card_num INTEGER NOT NULL, 
	cvv_code INTEGER NOT NULL,
	card_expiry_MO INTEGER NOT NULL,
	card_expiry_YEAR INTEGER NOT NULL,
	first_name VARCHAR(50) NOT NULL,
	last_name VARCHAR(50) NOT NULL,
	credit_card_type VARCHAR(50) NOT NULL,
	
	constraint pk_credit_card_id primary key(credit_card_id)
)ENGINE MyISAM;
 
 
	/* **********************************************
	*  Shipping Location Table                    *
	*********************************************** */  
DROP TABLE IF EXISTS Shipping_Location_Table;
CREATE TABLE Shipping_Location_Table
(
	Shipping_id INTEGER NOT NULL AUTO_INCREMENT,
	tracking_num VARCHAR(50) NOT NULL, 
	firstName VARCHAR(50) NOT NULL,
	lastName VARCHAR(50) NOT NULL,
	Shipping_add1 VARCHAR(50) NOT NULL,
	Shipping_add2 VARCHAR(50) NULL,
	Shipping_city VARCHAR(75) NOT NULL,
	Shipping_state VARCHAR(75) NOT NULL,
	Shipping_zip VARCHAR(12)  NOT NULL,
	Date_Shipped TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	
	constraint pk_shipping_id primary key(Shipping_id)
)ENGINE MyISAM; 


/* ********************************************
*            Ordered History Table            *
*********************************************** */
DROP TABLE IF EXISTS Ordered_History_Table;
CREATE TABLE Ordered_History_Table
(
   order_id INTEGER NOT NULL AUTO_INCREMENT, 
   member_id INTEGER NOT NULL,
   credit_card_id INTEGER NOT NULL,
   shipping_id INTEGER NOT NULL,
   date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
   total FLOAT NOT NULL,
   
   constraint pk_order_id primary key(order_id),
   constraint fk_member_id foreign key(member_id) references Member_Table(Member_ID),
   constraint fk_credit_card_id foreign key(credit_card_id) references Card_Info_Table (credit_card_id),
   constraint fk_shipping_id foreign key(shipping_id) references Shipping_Location_Table(Shipping_id)
)ENGINE MyISAM;     


/* Inserting inventory into the inventory table */

				
				/* Beginning of Mens Apparel Store Section */ 
				
insert into Inventory_Table(Name_of_Item,Quantity,Price,Product_Image)
values('Mens Gray Tennis Shorts',3,29.99,'photos/sml_mens_shorts.png');

insert into Inventory_Table(Name_of_Item,Quantity,Price,Product_Image)
values('Mens Tennis Shorts Bundle',3,79.99,'photos/sml_mens_bundle_shorts.png');

insert into Inventory_Table(Name_of_Item,Quantity,Price,Product_Image)
values('Mens Tennis Blue Shirt',3,39.99,'photos/sml_mens_blue_shirt.png');

insert into Inventory_Table(Name_of_Item,Quantity,Price,Product_Image)
values('Mens Horizontal Striped Shirt',3,49.99,'photos/sml_mens_horizontal_striped_shirt.png');

insert into Inventory_Table(Name_of_Item,Quantity,Price,Product_Image)
values('Mens White Tennis Shoes',3,89.99,'photos/sml_mens_white_shoes.png');

insert into Inventory_Table(Name_of_Item,Quantity,Price,Product_Image)
values('Mens Red Tennis Shoes',3,89.99,'photos/sml_mens_red_shoes.png');



/* Inserting a user into a Member Table */
insert into Member_Table(username,Fname,Lname,password,email)
values('customer','customer','customer','4879d61919c57e36de73422bf52e5ef6','dragon22@gmail.com');                          