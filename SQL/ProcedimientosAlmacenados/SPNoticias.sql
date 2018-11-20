Use pagadmin	;

DELIMITER $$
 CREATE PROCEDURE PA_Set_Noticias(
in _IdNoticias  int(11),
in _TituloNoticia varchar(45) ,
in _Descripcion varchar(45) ,
in _Imagen varchar(45) ,
in _URL varchar(45) ,
in _Posicion varchar(45) ,
in _IdUsuario  int(11) ,
in _Opcion varchar(45) 

 )
BEGIN
 if _Opcion='I' then

insert into Noticias (TituloNoticia,Descripcion,Imagen,URL,Posicion,IdUsuario) values(_TituloNoticia,_Descripcion,_Imagen,_URL,_Posicion,_IdUsuario);


   End IF;

    if _Opcion='D' then

Delete from Noticias where IdNoticias =_IdNoticias ;

   
   End If;
   END
   $$

DROP PROCEDURE IF EXISTS PA_Get_Noticias;

DELIMITER $$
 CREATE PROCEDURE PA_Get_Noticias(

     in _Opcion varchar(45)
 )
BEGIN
  
   
 if _Opcion='T' then

select * from Noticias  order by IdNoticias desc limit 2  ;

   End IF;

   END
   $$