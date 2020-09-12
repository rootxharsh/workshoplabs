FROM ruby:2.5.1

# Install dependencies
RUN apt-get update -qq && apt-get install -y build-essential libpq-dev nodejs nginx apache2-utils nano curl

# Set an environment variable where the Rails app is installed to inside of Docker image:
ENV RAILS_ROOT /var/www/app_name
RUN mkdir -p $RAILS_ROOT

# Set working directory, where the commands will be ran:
WORKDIR $RAILS_ROOT

# Setting env up
ENV RAILS_ENV='production'
ENV RACK_ENV='production'

# Adding gems
COPY app/Gemfile Gemfile
COPY app/Gemfile.lock Gemfile.lock
RUN gem install bundler
RUN bundle install --jobs 20 --retry 5 --without development test

# Adding project files
COPY app/ .
ENV SECRET_KEY_BASE="1dkasd01e0112391299adasdasdlakdlalkdlslakdasdkaskdllsdasdalsdk"
RUN bundle exec rake assets:precompile

#RUN gem install listen

# Copy Nginx config template
COPY dockerconfs/nginx.conf /tmp/docker.nginx

COPY dockerconfs/start.sh /tmp/start.sh

# substitute variable references in the Nginx config template for real values from the environment
# put the final config in its place
RUN mv /tmp/docker.nginx /etc/nginx/conf.d/default.conf

EXPOSE 80

ENTRYPOINT ["sh","/tmp/start.sh"]
