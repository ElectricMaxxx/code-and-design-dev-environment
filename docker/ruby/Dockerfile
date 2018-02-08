FROM ruby:2.3.3
RUN apt-get update -qq && apt-get install -y build-essential libpq-dev nodejs
RUN mkdir /myapp
COPY . /myapp
WORKDIR /myapp
RUN bundle install
