FROM ubuntu:24.04

RUN apt update && apt install -y pkg-config build-essential autoconf bison re2c libxml2-dev libsqlite3-dev

# COPY . /app
# ADD docker/ubuntu/Makefile /app/Makefile
# WORKDIR /app
# RUN ./buildconf
# RUN ./configure --enable-debug

WORKDIR /app
