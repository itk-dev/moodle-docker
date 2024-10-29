FROM bitnami/moodle:4.5

ARG WITH_ALL_LOCALES="yes"

RUN echo "da_DK.UTF-8 UTF-8" >> /etc/locale.gen && locale-gen