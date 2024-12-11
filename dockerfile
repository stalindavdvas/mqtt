# Usar la imagen oficial de Node.js
FROM node:18

# Mantenedor de la imagen
LABEL maintainer="your_name@example.com"

# Crear directorio de trabajo en la imagen
WORKDIR /app

# Copiar package.json y package-lock.json para instalar dependencias
COPY package*.json ./

# Instalar dependencias de la aplicación
RUN npm install --production

# Copiar el resto de la aplicación
COPY . .

# Exponer el puerto en el que se ejecuta el servicio (ejemplo: 3000)
EXPOSE 3000

# Comando para iniciar la aplicación
CMD ["npm", "start"]
