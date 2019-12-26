#!/bin/bash
sensitivity=$1
echo "Pipeline config sensitivity: $sensitivity"
config_source=/etc/trainer/pipelines/configs/aikea/object_detection_and_tracking_aikea_${sensitivity}.config 
config_target=/etc/trainer/pipelines/configs/object_detection_and_tracking_aikea.config
unlink $config_target
ln -s $config_source $config_target
