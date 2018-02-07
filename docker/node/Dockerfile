FROM node:carbon

# wir installieren uns hier in einem Container für nodes

WORKDIR /mnt/code/default

COPY package.json ./

RUN npm install

COPY . .

EXPOSE 8080

CMD [ "npm", "start" ]