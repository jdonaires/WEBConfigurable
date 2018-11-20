
DROP PROCEDURE IF EXISTS PA_GET_Slider;
DROP PROCEDURE IF EXISTS PA_SET_Slider;

DROP PROCEDURE IF EXISTS PA_SET_ImagenNosotros;
DROP PROCEDURE IF EXISTS PA_GET_ImagenNosotros;

DROP PROCEDURE IF EXISTS PA_GET_RedesSociales;
DROP PROCEDURE IF EXISTS PA_SET_RedesSociales;

DROP PROCEDURE IF EXISTS PA_GET_Cabecera;
DROP PROCEDURE IF EXISTS PA_SET_Cabecera;

DROP PROCEDURE IF EXISTS PA_GET_Conocemas;
DROP PROCEDURE IF EXISTS PA_SET_Conocemas;

DELIMITER $

CREATE PROCEDURE PA_GET_Slider(
)
BEGIN
	
    SELECT 
	   IdSlider
	 , Descripcion
     , Enlace
     , Imagen
     , IdUsuario
	FROM Slider 
	ORDER BY IdSlider DESC;

END$

CREATE PROCEDURE PA_GET_ConoceMas(
)
BEGIN
	
    SELECT 
	   IdConoceMas
	 , Descripcion
     , URL
     , Imagen
     , IdUsuario
	FROM ConoceMas 
	ORDER BY IdConoceMas DESC;

END$

CREATE PROCEDURE PA_GET_Cabecera(
)
BEGIN
	
    SELECT 
	   IdContacto
	 , NombreOrganizacion
     , Email
     , Telefono
     , LogoTipo
     , IdUsuario
	FROM Cabecera 
	ORDER BY IdContacto DESC;

END$

CREATE PROCEDURE PA_GET_RedesSociales(
)
BEGIN
	
    SELECT 
	   IdRedesSociales
	 , Descripcion
     , Enlace
     , Imagen
     , IdUsuario
	FROM RedesSociales 
	ORDER BY IdRedesSociales DESC;

END$

CREATE PROCEDURE PA_GET_ImagenNosotros(
)
BEGIN
	
    SELECT 
	   IdInagenNosotros
	 , Imagen
     , IdUsuario
	FROM ImagenNosotros 
	ORDER BY IdInagenNosotros DESC;

END$

CREATE PROCEDURE PA_SET_ImagenNosotros(
	P_Opcion	 		CHAR(1)
,	P_IdInagenNosotros	INT
,	P_Imagen			VARCHAR(45)
,	P_IdUsuario			INT
)
BEGIN
	IF P_Opcion = 'I' THEN
		BEGIN
			
            INSERT INTO ImagenNosotros(
				Imagen, IdUsuario
            )
            VALUES (
				P_Imagen, P_IdUsuario
            );
        END;
	END IF;
    
    IF P_Opcion = 'U' THEN
		BEGIN
			
            UPDATE ImagenNosotros SET	
              Imagen	   			= P_Imagen
            WHERE IdInagenNosotros  = P_IdInagenNosotros;
            
        END;
	END IF;
	
    IF P_Opcion = 'D' THEN
		BEGIN
			
            DELETE FROM ImagenNosotros WHERE IdInagenNosotros = P_IdInagenNosotros;
            
        END;
	END IF;
END$


CREATE PROCEDURE PA_SET_Cabecera(
	P_Opcion	 		 CHAR(1)
,	P_IdContacto		 INT
,	P_NombreOrganizacion VARCHAR(45)
,	P_Email			     VARCHAR(45)
,	P_LogoTipo			 VARCHAR(45)
,	P_IdUsuario			 INT
)
BEGIN
	IF P_Opcion = 'I' THEN
		BEGIN
			
            INSERT INTO Cabecera(
				NombreOrganizacion, Email, Telefono, LogoTipo, IdUsuario
            )
            VALUES (
				P_NombreOrganizacion, P_Email, P_Telefono, P_LogoTipo, P_IdUsuario
            );
        END;
	END IF;
    
    IF P_Opcion = 'U' THEN
		BEGIN
			
            UPDATE ImagenNosotros SET	
              NombreOrganizacion	= P_NombreOrganizacion
			, Email					= P_Email
            , Telefono				= P_Telefono
            , LogoTipo				= P_LogoTipo
            , IdUsuario				= P_IdUsuario
            WHERE IdInagenNosotros  = P_IdInagenNosotros;
            
        END;
	END IF;
	
    IF P_Opcion = 'D' THEN
		BEGIN
			
            DELETE FROM Cabecera WHERE IdInagenNosotros = P_IdInagenNosotros;
            
        END;
	END IF;
END$

CREATE PROCEDURE PA_SET_RedesSociales(
	P_Opcion	 		CHAR(1)
,	P_IdRedesSociales	INT
,	P_Descripcion		VARCHAR(45)
,	P_Enlace			VARCHAR(45)
,	P_Imagen			VARCHAR(45)
,	P_IdUsuario			INT
)
BEGIN

	IF P_Opcion = 'I' THEN
		BEGIN
			
            INSERT INTO RedesSociales(
				Descripcion, Enlace, Imagen, IdUsuario
            )
            VALUES (
				P_Descripcion, P_Enlace, P_Imagen, P_IdUsuario
            );
        END;
	END IF;
    
    IF P_Opcion = 'U' THEN
		BEGIN
			
            UPDATE RedesSociales SET	
              Descripcion  			= P_Descripcion
			, Enlace	   			= P_Enlace
            , Imagen	   			= P_Imagen
            WHERE IdRedesSociales 	= P_IdRedesSociales;
            
        END;
	END IF;
	
    IF P_Opcion = 'D' THEN
		BEGIN
			
            DELETE FROM RedesSociales WHERE IdRedesSociales = P_IdRedesSociales;
            
        END;
	END IF;

END$

CREATE PROCEDURE PA_SET_Slider(
	P_Opcion	 	CHAR(1)
,	P_IdSlider	 	INT
,	P_Descripcion	VARCHAR(45)
,	P_Enlace		VARCHAR(45)
,	P_Imagen		VARCHAR(45)
,	P_IdUsuario		INT
)
BEGIN

	IF P_Opcion = 'I' THEN
		BEGIN
			
            INSERT INTO Slider(
				Descripcion, Enlace, Imagen, IdUsuario
            )
            VALUES (
				P_Descripcion, P_Enlace, P_Imagen, P_IdUsuario
            );
        END;
	END IF;
    
    IF P_Opcion = 'U' THEN
		BEGIN
			
            UPDATE Slider SET	
              Descripcion  = P_Descripcion
			, Enlace	   = P_Enlace
            , Imagen	   = P_Imagen
            WHERE IdSlider = P_IdSlider;
            
        END;
	END IF;
	
    IF P_Opcion = 'D' THEN
		BEGIN
			
            DELETE FROM Slider WHERE IdSlider = P_IdSlider;
            
        END;
	END IF;

END$

CREATE PROCEDURE PA_SET_ConoceMas(
	P_Opcion	 	CHAR(1)
,	P_IdConoceMas 	INT
,	P_Descripcion	VARCHAR(45)
,	P_URL			VARCHAR(45)
,	P_Imagen		VARCHAR(45)
,	P_IdUsuario		INT
)
BEGIN

	IF P_Opcion = 'I' THEN
		BEGIN
			
            INSERT INTO ConoceMas(
				Descripcion, URL, Imagen, IdUsuario
            )
            VALUES (
				P_Descripcion, P_URL, P_Imagen, P_IdUsuario
            );
        END;
	END IF;
    
    IF P_Opcion = 'U' THEN
		BEGIN
			
            UPDATE ConoceMas SET	
              Descripcion     = P_Descripcion
			, URL		      = P_URL
            , Imagen	      = P_Imagen
            WHERE IdConoceMas = P_IdConoceMas;
            
        END;
	END IF;
	
    IF P_Opcion = 'D' THEN
		BEGIN
			
            DELETE FROM ConoceMas WHERE IdConoceMas = P_IdConoceMas;
            
        END;
	END IF;

END$