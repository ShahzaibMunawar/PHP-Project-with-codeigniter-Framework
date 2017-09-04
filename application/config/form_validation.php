 <?php
 
 $config = array(
     'add_artical_rules' => [
                                            [
                                                    'field' => 'title',
                                                    'label' => 'Artical title',
                                                    'rules' => 'required'
                                            ],
                                            [
                                                    'field' => 'body',
                                                    'label' => 'Artical body',
                                                    'rules' => 'required',
                                            ]
                            ],
     
     'loginarea_rules' =>   [
                                            [
                                                   'field' => 'username',
                                                   'label' => 'Username',
                                                   'rules' => 'required|alpha|max_length[20]|trim'
                                           ],
                                           [
                                                   'field' => 'password',
                                                   'label' => 'Password',
                                                   'rules' => 'required|alpha|max_length[20]|trim'
                                           ]
                            ],
     'add_user_rules' => [
                                            [
                                                    'field' => 'username',
                                                    'label' => 'username',
                                                    'rules' => 'required|is_unique[user.username]'
                                            ],
                                            [
                                                    'field' => 'password',
                                                    'label' => 'password',
                                                    'rules' => 'required|alpha|max_length[20]|trim',
                                            ]
                            ]
     
 );
