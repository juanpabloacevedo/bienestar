/*==============================================================*/
/* DBMS name:      PostgreSQL 9.x                               */
/* Created on:     25/03/2019 6:41:37 p. m.                     */
/*==============================================================*/


/*==============================================================*/
/* Table: ASISTENCIAS                                           */
/*==============================================================*/
create table ASISTENCIAS (
   ID_ASISTENCIAS       SERIAL               not null,
   ID_USUARIO           INT4                 null,
   ID_CLASE             INT4                 null,
   ASISTECIAS           INT4                 not null,
   INASISTENIAS         INT4                 not null,
   constraint PK_ASISTENCIAS primary key (ID_ASISTENCIAS)
);

/*==============================================================*/
/* Table: CLASES                                                */
/*==============================================================*/
create table CLASES (
   ID_CLASE             SERIAL               not null,
   ID_ESPACIO_DEP       INT4                 null,
   CUPOS                INT4                 null,
   constraint PK_CLASES primary key (ID_CLASE)
);

/*==============================================================*/
/* Table: CLASES_USUARIOS                                       */
/*==============================================================*/
create table CLASES_USUARIOS (
   ID_USUARIO           INT4                 not null,
   ID_CLASE             INT4                 not null,
   constraint PK_CLASES_USUARIOS primary key (ID_USUARIO, ID_CLASE)
);

/*==============================================================*/
/* Table: ESPACIOS                                              */
/*==============================================================*/
create table ESPACIOS (
   ID_ESPACIO           SERIAL               not null,
   ID_SEDE              INT4                 null,
   CANTIDAD_USUARIOS    INT4                 null,
   ESPACIO_DISPONIBLE   BOOL                 null,
   constraint PK_ESPACIOS primary key (ID_ESPACIO)
);

/*==============================================================*/
/* Table: ESPACIOS_DEPORTIVOS                                   */
/*==============================================================*/
create table ESPACIOS_DEPORTIVOS (
   ID_ESPACIO_DEP       SERIAL               not null,
   ID_USUARIO           INT4                 null,
   NOMBRE_ESPACIO_DEPORTIVO CHAR(36)             not null,
   constraint PK_ESPACIOS_DEPORTIVOS primary key (ID_ESPACIO_DEP)
);

/*==============================================================*/
/* Table: ESTADOS                                               */
/*==============================================================*/
create table ESTADOS (
   ID_ESTADO            SERIAL               not null,
   ID_RESERVA           INT4                 null,
   APROBADO             BOOL                 null,
   CANCELADO            CHAR(12)             null,
   RESERVADO            CHAR(12)             null,
   constraint PK_ESTADOS primary key (ID_ESTADO)
);

/*==============================================================*/
/* Table: RESERVAS                                              */
/*==============================================================*/
create table RESERVAS (
   ID_RESERVA           SERIAL               not null,
   ID_ESTADO            INT4                 null,
   ID_ESPACIO           INT4                 null,
   ID_CLASE             INT4                 null,
   NOMBRE_RESERVA       CHAR(36)             null,
   constraint PK_RESERVAS primary key (ID_RESERVA)
);

/*==============================================================*/
/* Table: ROLES                                                 */
/*==============================================================*/
create table ROLES (
   ID_ROL               SERIAL               not null,
   NOMBRE_ROL           CHAR(24)             not null,
   constraint PK_ROLES primary key (ID_ROL)
);

/*==============================================================*/
/* Table: TIPO_DOCUMENTOS                                       */
/*==============================================================*/
create table TIPO_DOCUMENTOS (
   ID_TIPO_DOCUMENTO    SERIAL               not null,
   NOMBRE_DOCUMENTO     CHAR(32)             not null,
   SIGLA                CHAR(32)             null,
   constraint PK_TIPO_DOCUMENTOS primary key (ID_TIPO_DOCUMENTO)
);

/*==============================================================*/
/* Table: USUARIOS                                              */
/*==============================================================*/
create table USUARIOS (
   ID_USUARIO           SERIAL               not null,
   ID_ROL               INT4                 null,
   ID_ASISTENCIAS       INT4                 null,
   ID_TIPO_DOCUMENTO    INT4                 null,
   NUMERO_DOCUMENTO     CHAR(32)             not null,
   APELLIDOS            CHAR(32)             not null,
   CODIGO               CHAR(32)             null,
   CORREO               CHAR(32)             null,
   CELULAR              CHAR(32)             null,
   FOTO                 CHAR(256)            null,
   PASSWORD             CHAR(32)             null,
   USUARIO              CHAR(32)             null,
   ACTIVO               BOOL                 null,
   NOMBRE               CHAR(32)             null,
   constraint PK_USUARIOS primary key (ID_USUARIO)
);

alter table ASISTENCIAS
   add constraint FK_ASISTENC_REL_CLASE_CLASES foreign key (ID_CLASE)
      references CLASES (ID_CLASE)
      on delete restrict on update restrict;

alter table ASISTENCIAS
   add constraint FK_ASISTENC_REL_USUAR_USUARIOS foreign key (ID_USUARIO)
      references USUARIOS (ID_USUARIO)
      on delete restrict on update restrict;

alter table CLASES
   add constraint FK_CLASES_RELATIONS_ESPACIOS foreign key (ID_ESPACIO_DEP)
      references ESPACIOS_DEPORTIVOS (ID_ESPACIO_DEP)
      on delete restrict on update restrict;

alter table CLASES_USUARIOS
   add constraint FK_CLASES_U_CLASES_US_USUARIOS foreign key (ID_USUARIO)
      references USUARIOS (ID_USUARIO)
      on delete restrict on update restrict;

alter table CLASES_USUARIOS
   add constraint FK_CLASES_U_CLASES_US_CLASES foreign key (ID_CLASE)
      references CLASES (ID_CLASE)
      on delete restrict on update restrict;

alter table ESPACIOS_DEPORTIVOS
   add constraint FK_ESPACIOS_REL_USU_E_USUARIOS foreign key (ID_USUARIO)
      references USUARIOS (ID_USUARIO)
      on delete restrict on update restrict;

alter table ESTADOS
   add constraint FK_ESTADOS_REL_ESTAD_RESERVAS foreign key (ID_RESERVA)
      references RESERVAS (ID_RESERVA)
      on delete restrict on update restrict;

alter table RESERVAS
   add constraint FK_RESERVAS_REL_CLASE_CLASES foreign key (ID_CLASE)
      references CLASES (ID_CLASE)
      on delete restrict on update restrict;

alter table RESERVAS
   add constraint FK_RESERVAS_REL_ESP_R_ESPACIOS foreign key (ID_ESPACIO)
      references ESPACIOS (ID_ESPACIO)
      on delete restrict on update restrict;

alter table RESERVAS
   add constraint FK_RESERVAS_REL_ESTAD_ESTADOS foreign key (ID_ESTADO)
      references ESTADOS (ID_ESTADO)
      on delete restrict on update restrict;

alter table USUARIOS
   add constraint FK_USUARIOS_REL_USUAR_ASISTENC foreign key (ID_ASISTENCIAS)
      references ASISTENCIAS (ID_ASISTENCIAS)
      on delete restrict on update restrict;

alter table USUARIOS
   add constraint FK_USUARIOS_REL_USUAR_TIPO_DOC foreign key (ID_TIPO_DOCUMENTO)
      references TIPO_DOCUMENTOS (ID_TIPO_DOCUMENTO)
      on delete restrict on update restrict;

alter table USUARIOS
   add constraint FK_USUARIOS_REL_USU_R_ROLES foreign key (ID_ROL)
      references ROLES (ID_ROL)
      on delete restrict on update restrict;

