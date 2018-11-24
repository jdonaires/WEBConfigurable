Use pagadmin	;

DELIMITER $$
 CREATE PROCEDURE PA_Set_Slider(
in _IdSlider  int(11) ,
in _Descripcion varchar(45) ,
in _Enlace varchar(45) ,
in _Imagen varchar(45) ,
in _IdUsuario  int(11) ,

in _Opcion varchar(45) 

 )
BEGIN
 if _Opcion='I' then

insert into Slider(Descripcion,Enlace,Imagen,IdUsuario) values(_Descripcion,_Enlace,_Imagen,_IdUsuario);




   End IF;

    if _Opcion='D' then

Delete from Slider where IdSlider =_IdSlider ;


   
   End If;
   END
   $$

DELIMITER $$
 CREATE PROCEDURE PA_Get_Slider(

     in _Opcion varchar(45)
 )
BEGIN
  
   
 if _Opcion='T' then

select * from Slider order by IdSlider desc limit 10  ;

   End IF;

   END
   $$
   