package com.phalcon.template.builder;

import com.phalcon.common.BaseEntity;
import lombok.Data;

import java.time.LocalDateTime;

/**
* <?= $comment ?>

* @Author limx
* @Desc 系统生成，不允许修改
* @DateTime <?= $datetime ?>

*/
@Data
public class <?= $modelClass ?> extends BaseEntity {

<?php foreach ($fields as $field) { ?>
    private <?= $field['type'] ?> <?= $field['name'] ?>;

<?php } ?>

}