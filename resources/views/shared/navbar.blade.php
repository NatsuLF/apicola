<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation" area-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-left" href="{{ url('/') }}">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAAAtCAYAAAA6GuKaAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH4AgLFwccf8gCnwAAEmVJREFUWMO1mWl0XMWZhp+qe/v2rr212ZZsCdkIPLbBhrAEAiZmh5gkLBMgCSdkQYZDOEyYbGcSAhNCAgESJEJCyAIGxoQtbDEkgFkSQyDYxqtWy1pbLXW31K1udd97q+ZHS0aWDRPOnNSf7nNu3ar3vvV977eU4COMjjZoain8b2/FFIKgENQAVcBKrVkMLFCaesCvNVOGZK8Q9AM7gB1o+hEMu4rJJetw5q77zwzxUcHuuBPptThBSs7TmgVCMDEQN/RwUka3dFvZkQnZbjtiuD9umJZHl5SFVPkZy/LZooDbVF/plIZ8OiwlAa0YdDVPZbP8dfn16I8CXnwUpjtbORLJzcD8wbhxR9eQ/9WbHvOfmsmJ3R5TX6i02KE1HXlbdFgeXYogbAiagXqlGZJC11gm+xZWugP3fiXhM6T+vtJ0uYofLF7Hrv8307O/uqONiBRcoTVnDSeN1z/7k4rnExlRX1vmpoWgCHhLa6I9Q7GJD1qvoSZSLAQeDWs0qKExI+c1xfCz3x05v6bEPRF4Vmnub2ph9FAYPhT03IntrZxumVw9OiF33vVc+K0HXg6qqjInUxxUu2xHZHqGYmNzljCe+1bTBdIU/rs39D/2zJ5MZu4ei2oiPsOgaTIrmofGDHnFJycnrz07fXzIr1Zozc+bWnh+BsehgIsPYFk0taDbW7nCb/Hlv2z33nbD74v9Xo/WpsnLYUtHt+0dVdMAuPXiYi66s5P7vtrQvGSBeXNlVem5aE08MflqXzR700U/7X51Zm7PUAyAkkAl1RXayNvU2S6npjKy6+UbRz3hgHuz0vxycQv3z+CYC1x8iElc7jW57MY/hO95bHOgqiKs3nYVO3uGYtmG2gjdg7H97734/eawctXV1RXWdUWRmohhSKSvhHxiH9lsPj0Wz2zI5fVN32rt6Ht71HGTjx/LipYeLAPaB2IsqokEDcnxQwkjnH58+M2OLrFeCP1LKXhY6X+S6d2tXOHzcOktjxf9+NG/+ZOlIZXrGohtnWHrlouKueSuTgAe/0bT5+prfd8tLvI3W8W1oFyEvwjt5AuLSYk91ktmMpuMxafue21L6o7vPTE4CHDTBdXcv9mlZyjGwpqIzzJ1KDkpl1943JT3+vMnvu24bFi8jp/9nzbd3soan8WNtz4VvumJN/1HeE29oWco1jd33p2XLVx09BJfW3VN0WpDKMu34Bic8UGkN4R2pwELiVYOQhhIw0Mu1q4nJjLR/qhz83k/2tN6KMIW1UTqc7Y45+ozMm9efkr6psk8tx2+jpcOAj3L6CsMyf1b9np+8ZmfVIw1VjvJzoHYHjzlYBf87XfrFhVXlnu/XFvuuamkIuITHj+yeB7O2F6MYATt5qYZFqA0QnrQKg9ohOlH5cbJJaLEx6e29A5kb+gbntz0H48MTX9lKZCgoTZyajwli351VcJ7bGN+bd7l6qYW4jM4D2C66x6+kc6JktN/EOkK+3V/50DshZlnXzgq7LnwzJo1FaXWt8vLgyd6S2rRSiO9AVR+EukNo518gVnTC04eYZgorZDSQCsXtAJpINC46VGymSkViyU3xMftW9b+uHPbbCyNtZEzsnlR/8qNI4cLQaqphe/NPJMdbfvNollpzr7tqfA2Q7JLaf4yM+nJG5YsufLCBQ82Lgz/T8386hO9ZXWARFo+tOsipIl2HbR2kaYXVB4MD1pp0BrtOggpAQka0GAEKwmUVsr6RTWXNNaFX9p0c3Pb49c3Nc7CvUlKnB8+XvxHQ7K6vZWjZqxCAGy/A+n3sWFk3Nhz/DerX2qszW/tGoyN3vPFBeUN9cEvVZZ5v1NSWlRkhiJoaRXecm2EtNBuDmGFULlxpMeP1i4oBUJO259ECY3QCqSJUG4hZmsQUqKVRngM8rFuJlK5WGxs6o590ez9V97bG11UEzmyZ8iKvPGj4aOqS9ylts3XDr8GWwL4vHwMwcKLb694prLMNrsGY6Mbv9e8ZtXS4ica6stvLa+uLjKLakFaoF1QLkgDrRwwLFRuYr95CGmihSy4izYK+DUIYaCVQmsJ2gAkGo3WNiiBp7SOirpFkYXzQz88oiG0/vnvLinWmq75lfn6z/+sbJMhWGAYHA4g97RiSMn5I+PGHQNJUVka1LsBSkLGtZH5C07yhsvAKi5sUKAHrRXS9KGdDEKAEAIcG0wfKpdGGn60NjC8KTyhIazQAFa4D3/xMJ7QAKY/imHlUHkXwwqjpsYRhoXK2/irDyPkN4/xe4UfSc7nYUfXsNEwkRV/MiRnF1S0kF7O/9WLoW11Fe4q2xVRAEMKre0MwhsCaRZYcu2CDhtenMkxzHAtKp9F+Mpw7TQoG+ktRrsj+Et78IZ7sQIxTF8CwxpHesbw+ONY4ShWUSeByAjKGcMIVqJyE5ildbipEYS3GGXn2DsY02i6F1SoqvWvBV/T8PGONopMIajRMLlpl7VGCF7uHhyZKpicFsLjn/Z6jRAShEAI0NpBegryJU0LnZ9AWmHQLqa3DzOQRKgUyBJE4Aikbx4YJSAEuJNoexQ91Qm5vQRKRsmlx8EzHzczhvCXosf7pGGahcxyMBZvnBfZ8/TfQ8aVp6V9QI0pIBJNGMJ2qDQNEvt9V2ukJ1BwKl1gVwuJVjbazWMEynCSfZjF83ESvXjKF2F6dmJ6U6BzyPAqZMVaMIpBmAfEMaFd0Hl0+h3c0cfxFsWRdglTg+NYtcvRfbulNDxif66iGdg5IDJS8LbSHGcqzdGVxe7mfdHYb2brpEbgZhMYwQow/eDaaHcKYXiRHj9uJo5ZPB83HcU7bwVq7Fk88wy0IxBFJ6LLLwFDFmRiesX3UUsQPkTJ6RhGOW5sPaa7G9+C1eT638MM1Qid6KRnKEZDTYSuwdguAKXpAJZLoElpBueGU6UAwypoq+ugASE9CK3QykUYHpQ9ifAWQ+YNAgu8aFshS1ajSi9h6/ZutFYfns2rNKJoJUbNV5CBSqT9OiJYg8qnpPT4AOgeis1+YxvQIIH5wL6DQWst9mtyvqAQ0oNGFKROSLSdw/QmsMKZghIUH4evdi2ZTJbXX/tHQfX0h6E2wZ1C+BYiyz+NETLxGN3gKCkNeahkbhcwTwLzgIMqDo12tbILYdnjR2sNbq7glIaJEAbC8mAGYiBc8FSQ8pzG7t19tLfvIx6fYCqbR8oPKI60i57cik6/AyqPCB+LDB6LpzSH4fcVYsGc0dTCJFBpAkEoVMUHLiqmtHIQM0FkxhYRoAVau3iL+pEyDRhQfjkPPPAmL2x8Ha/XRy43Rf/QGEceXk8+b7+fnxkBEAY68RJu9CHARpavRZafhay8CJ3tR4peDOn7oOPREpgEPAc/UlOmrwIhjEKiAwXZ0wqNwApFMawUKBej8nKMUANFYS+jo0lKSisYGBxj955evF6rcEpoQKFGHkaNPITO7ACVATeLznYWIq0WyKqLEIZFIj0pPwi1BAaA8MHVo8g62VE84TqEYQGqsLmQeKwopq9Qf4rgMkRoGULbGFIjDQOlIZ/LMZGYQGuNlAJheFGJTaixZ1Cjz6FVDlF0DCJ4JLLy4hlPAk8lMtgkkom05xBlYAAYmQFdd4iadwqtyE/sxVveDMJCK4XpT2AVje3XXVm2BoRnRtqxbRtfwI8/4Me2XcYTE6QmNWNxF0G+wJMQCCRoB5xk4feArS00wnsIko8EhiSwE1hwMNE6i6fgENmRHXjLm/CVjGEF+gtH7Ywjik9G+Bfv12DDMBFAeiKFY9s4rksqC9u37SCZHMcoW40sOQVZcjLaCKDT29HOOHr4t7NMcPqbhLAOAXop0DkDetFMXv0+aGmrbBJhgieQQKqnMbzDheimcwj/Yozy8wpHOj18Pi+BYACtFSWlJWQyNlVVxXgyr+KlB4FG28Po/DBCuwjDV7BrX8P+VLawt0AIeSimlwBbTWBwuhfnA6be90OhraIMgbJdaFTBZ7VRAGmEkJELQFrYtosUCtM0EEJQWlaOz+cnlRonlUqRnUyz8uTLEdLAHn0ePbmrQKf/cETFpxFuGlmyepag76famN0lmFa5VcDvTGAYCADhjjamZsp1PZ2Jai0KkjZLX2XRxxH+JrRyGY45RIdjnHT8AhSayckUU5ksixcvZNmyJeRSXfiSv8GxJ5Dh48CqQigbEVw6Ddaetmk1i2mQUsxVjyIgBwzMSF4/cMJMR2c6zouD6nXtIIPLkGVn7T/GeO8TlBbnsR2FROD3B6lbVI9heDj+hJUE1E5cexKEiZrqxihZjShahQivAp2f44QCEAghxNyiG7gA+GtTCxOyqQUXeAK4saMNY4ZpV6lCJ0AJhCzorAwfg6y6DKSXmWJv4eKTWFRXieNoEokk6XSabCZD794+RoaG8ZR+DLzzEGY5wteIG9+ISr6Cjm+cdj4xXTRaCDT5kd1kxoYmtRCp6ShIRxsmcCHw5HTwB2DzdFz/JvDfAMm085i3X6zI5+Ta8voKPA2fRXsaQFiFI50eJeW1aK0RQrNkSQPnnV9MNpthft0ixsdTCGsFRvWXEEKiMrvQ46+CMNG5AcAtMGuFILWP2D+eZqy3/YXEaPynqZyxS28HsRSAK4A+YA+AmNXzWAL8EvhCUwt7KXinvPvaw9YurC+6t2bx8tLg0vMN4Q3uN/oD1QaUhmuvu4d59U10tXdy2upmLr1kNa5LwUFUDnfgbrSTwIhciAgfA9omt/d1ht95dnKgP3bdW1ujD37/+Wx2lhPWAY8CVza18N7+anzWhBsAX1NL6AeQfr+bdGl16bLD/FeVV1ZdUbbk2MOKGk+EYDXamTowvErBns5hhkck+/qi1M8zOOXkI3EcdYDNIg2ElOT632Fsx8uZZN+eh3oH0z+75O6h9+bgkcCtwGRTC9+fHcaZpdH3A8f13Js+FZb6Gmsj9QBfXz+c2PDC6I/2dg98fNdrL/5n7/N3urnOPyOs4AH6qpRmcWM1K5eV0NP1Hh6PxuMxD8gdMUx0Ps3EG3fT+Zffb+ncseukv20dWzcDeFFNhIbaSNn0C6dMB767ZuM8VC/v7LCf67/+m+KHX9ru3RPy6fd6hmLJ2XNav9xw9FHzs21Vjf+2vPjoi31mUQ0Y5nQtKchkczz59Nucc+YKSoqCKK1BCLSTIxfdRfzN9cnufePrz7117/XTMja7l1edc8QZ912T3NRUkW8F7mxq4cUDGuBzQf/8OTq+dgbm6mW5z/VEze6uqLlyxULr3X2xqf1G/Nw/EkO/fmXp785d3LE72/9upczH6zxevzBClSAEju2wtzfGovoI/oAfhMCObmfs3aey/W/+cf3u7tS6z97Z92vAve7MajZ3FkyxoTZyWiYvataumuLcozI/Af7Q1MKGuRgPAt17LzRcxbvXnov7yWW5r3YOmRvf6fGeW1MWSMZTmRjAZ06Yz66+neqB11M71i7NPdLVFe024zuPN/KjIau8DluZvLLpLZYva8In8yT//iD73trYufXdjk8Nx3L3fvFXwwMbrmvk0c0JNnemaZgXkaXh4FGJtKw4qTlfc8tl41c4Lj9tauGhjjb4+bMfArqjDRquKtwE2B62GS7Fa5bnLi0L6u2v7fKuDAeCVJUGJrJ5Z2ooXriVOGVplfPFe/ZteXjjcNsZCwdDxNvr8o4bTGUR5TKq0+8+MtC7c1vryf/V+ekn3k71f6K5WL2wPcWjmxM0zovIsqJged4W59mOqL/98+PGDZ+aPD2e5s9LrubB2VcYs4F/4J1LbxvUt0DXLzjNI/lS94jh3PlM0R+e3OyTVWXu7tKQSuzeNxqd+/6T15SuCJaWX26Gys/KTsRfcVOxX5x3V3Lb3HnNdRXV8UlZGx2zzHOOmTzs5n9PHlcW0mWZHA82X8Of2lth8bqPcLs1946jo41yKfg6gtXbeq0/XX1f6cZoUiydV+ZaAZ/e6CoRbe+LZaAESNL941pz3LbC0fjU5Jm3D+dn1jmsNlIpDeqzeTGvL2rkF1a7+rnvjM6zTHUlmo0a7mpqIf6Rb7c+bOxpZZXPQ4vtsmBLj7Xlt68E3tnW4xt2tLrAcWWrx1TNptQZDXtdhU8Kkq4SthAcLwW1touUMLiyMe+9+qx0Q0OV+wmEHtGK2xav491/2Y3tltuxioI0CzhHaU7K2cIbHZc7tZZ7Hnnd77y80zs8lJAdpqRGSJ2rK1djJx+RW7VmWa6susSpC/nVMsskJwV/k4Kncg67lqzD/pfd2M61s657KNaFvsnHtGaVKPyv1VCJxkVgACMCRoAODduF4A0h6G/82vtti/Y2WPwR7sb/F6I1kbDiM+y4AAAAAElFTkSuQmCC" style="padding-top: 3px;">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="nav navbar-nav navbar-right">
                <li class="{{ $controller == 'StaticController' && $action == 'about' ? 'active' : '' }}">
                    <a href="{{ url('/') }}">
                        <i class="fa fa-home" aria-hidden="true"></i> {{ trans('messages.about') }}
                    </a>
                </li>
                <li class="dropdown {{ $controller == 'StaticController' && in_array($action, ['hive', 'getting_started', 'financial_analysis']) ? 'active' : '' }}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                        <i class="fa fa-circle-o" aria-hidden="true"></i> {{ trans('messages.hive') }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li class="{{ $action == 'hive' ? 'active' : '' }}">
                            <a href="{{ url('hive') }}">
                                {{ trans('messages.beehive') }}
                            </a>
                        </li>
                        <li class="{{ $action == 'getting_started' ? 'active' : '' }}">
                            <a href="{{ url('hive') }}">
                                {{ trans('messages.getting_started') }}
                            </a>
                        </li>
                        <li class="{{ $action == 'financial_analysis' ? 'active' : '' }}">
                            <a href="{{ url('financial_analysis') }}">
                                {{ trans('messages.financial_analysis') }}
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="{{ $controller == 'ItemController' ? 'active' : 'no-active' }}">
                    <a href="{{ url('catalog') }}">
                        <i class="fa {{ $controller == 'ItemController' ? 'fa-folder-open-o' : 'fa-folder-o' }} " aria-hidden="true"></i> {{ trans('messages.catalog') }}
                    </a>
                </li>
                <li class="{{ $controller == 'StaticController' && $action == 'services' ? 'active' : '' }}">
                    <a href="{{ url('services') }}">
                        <i class="fa fa-flask" aria-hidden="true"></i> {{ trans('messages.services') }}
                    </a>
                </li>
                <li class="{{ $controller == 'ContactController' ? 'active' : 'no-active' }}">
                    <a href="{{ url('contact') }}">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i> {{ trans('messages.contact') }}
                    </a>
                </li>
                <li class="{{ $controller == 'PostController' ? 'active' : 'no-active' }}">
                    <a href="{{ url('blog') }}">
                        <i class="fa fa-newspaper-o" aria-hidden="true"></i> {{ trans('messages.news') }}
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                        @if (Config::get('languages')[App::getLocale()] == 'English')
                            <img src="data:image/gif;base64,R0lGODlhGAANANUAAHEAErW1tgo0k7cCIJmZmQAaZubl5dtMZMzMzJ4bMCNUwr9AVcXFxYoAFtFidP///yFJvMI1TbXC7tTd9TFj1LUsQn8UJaYBHNdsfqskOgQgfaampt7e3vDv77kgOdY5U3sAFZsOJYwfM9tUbRU3pAAicYwTJD9m1L69veF6jdQtScsmQSZLw8LQ8SlTzNjX162trchRZZsmOc1GXKMqPvb29txZb4MGG84fPIIbLAAog8IPLNg/WIkMIBAzmtJPZSH5BAQUAP8ALAAAAAAYAA0AAAb8QJ/OR1IoTieIL9EAgXqJ1edgs80qGZ2E1FI8KA+IhrEhwBiGh7rTeTFQJN+E9XCFJaUGANCITkc/CxkJPQISdGAuEzoFZRsBCBwGBhwvCCgBGyQQDyc1EBMaEgUWFgkVPDYYGA4xCzQiIpwUNSwTPniNKC8dajUdHAgMmQQKYLa4JaM3IR4qB4ALFYQ3ey4nLkoaJQXduzW+lJfEBDYHKjg7FxdOzB5TNj8R0z03TiBqagYIAQQbDC/APahhwBIKGGX88VixY8CFJgBuJHgHTd6gHiD2AADxoiO/hAEAchjpJgA5fxtG8FBRQYaIHDIWjMCQIgUGVxVg5cgRA4tGEAAh/qqpIERhdmlkIFBhc3NpbmdoYW0NCmh0dHA6Ly9ib2ZmaW5icmFpbi5kZXZpYW50YXJ0LmNvbQ0KV2l0aCBwZXJtaXNzaW9uIGZyb20gYG55c3NpLiAgT25seSB0byBiZSB1c2VkIG9uIGRldmlhbnRBUlQuICBEbyBub3QgY29weSwgbW9kaWZ5IG9yIGRpc3RyaWJ1dGUgd2l0aG91dCBwZXJtaXNzaW9uLgA7" alt="English">
                        @else
                            <img src="data:image/gif;base64,R0lGODlhGAANAPcAAP76bf76Y/76Wv75UPn2af34Ov3ybf3yavzyZvzxYvzxX/zxXfzxW/byZ/vwYvrwZf33IfzwWPzwVPzwUPjuZfzvTPzvQ/zvSfzuPfXsZ/zuMfzuOPTqafHoaPfqR/rsKfrrH/ToPe/mZfPmQe3jY+/jO/LlFOjfXO7hIeveNubcWeLaYuHXUeXZMcjO6N7UT+XXD73O1dvRSt7SKtbMQ9LHPdXJJNTHDszCN8i9MbOwvcO5K8e5GsS5Cr60JcC1GLqvILqwFKOmmLSpQretCrWrHbOqErKoGayiFMiYEaajC6KeCqecCqWaDqSZCrOVE6OYDaSZCJ2ZCaGWCpmWCJ6UCZqQFJ+QDJuQCZeMCIaEfedhaeBfZ+hcZORbY+dXYJN1K2Z6fdpaYuZSW9dVXXlsbuVLVNJQWIBvC85KUuRDTcpETOM9R3BdXuI3QcU+RkhfaOIzPeIyPG1aBX9JYtU0Pd8uOaFBHNYrNbsxOuAjLuAhLLYrM2U/PW4/CN8bJ8MhKrEkLWg4Gd0SHnQyCaseJsYWILQYInwmG2csCqQYINsIFbcSHMQNGKoOGNgBDroIEscADHEaD5sMFkYiLpcKErcBDKAHEKwAC6MACo4FDY8DC5MCC5wACZYACZEACY4ACIcCCYYACIoACIMACAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAQUAP8ALAAAAAAYAA0AAAj/AB8t+iPHzJYtZuIYgtRJlKhLjPCwGcNFTJo8hR4NsqPmy5YvavQ0wvSJFCdHgNyY8cKFzBs+iiBoGCAAQIABBVDcIEJlSZAZIQYEaLCCBY4dRz5YYHDgwAQMKGwQiYLFCI8WFxhQIMGCxo4iTTZMQGCAgYUhdyqhweLkh40SEhxwOCEDhw8kUyokMKDgAhgUfgRZSWTERosKCzKQeHH0SBMsDAwkkLDBRZI5dMpo+TFjhIQHHVTQyAEEbxYECCRY+BDjiSRKbcq8naBgLmMfjrFgMbDAggYQOq74IYRISAsPER6I6JqjCJIqWaokqPAbBhwigvocCRNCQoK5NHCUSYaimwlOCCZg9FAipXAKoQSW19gRhH1PIm72LIpkydMoTSjVYRAXZ7wRiCKVjKLgJ53osZ8lmSg4ySECdtHSGjBNsolDoHiSSUAAIf6qqSBEYXZpZCBQYXNzaW5naGFtDQpodHRwOi8vYm9mZmluYnJhaW4uZGV2aWFudGFydC5jb20NCldpdGggcGVybWlzc2lvbiBmcm9tIGBueXNzaS4gIE9ubHkgdG8gYmUgdXNlZCBvbiBkZXZpYW50QVJULiAgRG8gbm90IGNvcHksIG1vZGlmeSBvciBkaXN0cmlidXRlIHdpdGhvdXQgcGVybWlzc2lvbi4AOw==" alt="Spanish">
                        @endif
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        @foreach (Config::get('languages') as $lang => $language)
                            @if ($lang != App::getLocale())
                                <li>
                                    <a href="{{ route('lang.switch', $lang) }}">
                                        @if ($language == 'English')
                                            <img src="data:image/gif;base64,R0lGODlhGAANANUAAHEAErW1tgo0k7cCIJmZmQAaZubl5dtMZMzMzJ4bMCNUwr9AVcXFxYoAFtFidP///yFJvMI1TbXC7tTd9TFj1LUsQn8UJaYBHNdsfqskOgQgfaampt7e3vDv77kgOdY5U3sAFZsOJYwfM9tUbRU3pAAicYwTJD9m1L69veF6jdQtScsmQSZLw8LQ8SlTzNjX162trchRZZsmOc1GXKMqPvb29txZb4MGG84fPIIbLAAog8IPLNg/WIkMIBAzmtJPZSH5BAQUAP8ALAAAAAAYAA0AAAb8QJ/OR1IoTieIL9EAgXqJ1edgs80qGZ2E1FI8KA+IhrEhwBiGh7rTeTFQJN+E9XCFJaUGANCITkc/CxkJPQISdGAuEzoFZRsBCBwGBhwvCCgBGyQQDyc1EBMaEgUWFgkVPDYYGA4xCzQiIpwUNSwTPniNKC8dajUdHAgMmQQKYLa4JaM3IR4qB4ALFYQ3ey4nLkoaJQXduzW+lJfEBDYHKjg7FxdOzB5TNj8R0z03TiBqagYIAQQbDC/APahhwBIKGGX88VixY8CFJgBuJHgHTd6gHiD2AADxoiO/hAEAchjpJgA5fxtG8FBRQYaIHDIWjMCQIgUGVxVg5cgRA4tGEAAh/qqpIERhdmlkIFBhc3NpbmdoYW0NCmh0dHA6Ly9ib2ZmaW5icmFpbi5kZXZpYW50YXJ0LmNvbQ0KV2l0aCBwZXJtaXNzaW9uIGZyb20gYG55c3NpLiAgT25seSB0byBiZSB1c2VkIG9uIGRldmlhbnRBUlQuICBEbyBub3QgY29weSwgbW9kaWZ5IG9yIGRpc3RyaWJ1dGUgd2l0aG91dCBwZXJtaXNzaW9uLgA7" alt="English">
                                        @else
                                            <img src="data:image/gif;base64,R0lGODlhGAANAPcAAP76bf76Y/76Wv75UPn2af34Ov3ybf3yavzyZvzxYvzxX/zxXfzxW/byZ/vwYvrwZf33IfzwWPzwVPzwUPjuZfzvTPzvQ/zvSfzuPfXsZ/zuMfzuOPTqafHoaPfqR/rsKfrrH/ToPe/mZfPmQe3jY+/jO/LlFOjfXO7hIeveNubcWeLaYuHXUeXZMcjO6N7UT+XXD73O1dvRSt7SKtbMQ9LHPdXJJNTHDszCN8i9MbOwvcO5K8e5GsS5Cr60JcC1GLqvILqwFKOmmLSpQretCrWrHbOqErKoGayiFMiYEaajC6KeCqecCqWaDqSZCrOVE6OYDaSZCJ2ZCaGWCpmWCJ6UCZqQFJ+QDJuQCZeMCIaEfedhaeBfZ+hcZORbY+dXYJN1K2Z6fdpaYuZSW9dVXXlsbuVLVNJQWIBvC85KUuRDTcpETOM9R3BdXuI3QcU+RkhfaOIzPeIyPG1aBX9JYtU0Pd8uOaFBHNYrNbsxOuAjLuAhLLYrM2U/PW4/CN8bJ8MhKrEkLWg4Gd0SHnQyCaseJsYWILQYInwmG2csCqQYINsIFbcSHMQNGKoOGNgBDroIEscADHEaD5sMFkYiLpcKErcBDKAHEKwAC6MACo4FDY8DC5MCC5wACZYACZEACY4ACIcCCYYACIoACIMACAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAQUAP8ALAAAAAAYAA0AAAj/AB8t+iPHzJYtZuIYgtRJlKhLjPCwGcNFTJo8hR4NsqPmy5YvavQ0wvSJFCdHgNyY8cKFzBs+iiBoGCAAQIABBVDcIEJlSZAZIQYEaLCCBY4dRz5YYHDgwAQMKGwQiYLFCI8WFxhQIMGCxo4iTTZMQGCAgYUhdyqhweLkh40SEhxwOCEDhw8kUyokMKDgAhgUfgRZSWTERosKCzKQeHH0SBMsDAwkkLDBRZI5dMpo+TFjhIQHHVTQyAEEbxYECCRY+BDjiSRKbcq8naBgLmMfjrFgMbDAggYQOq74IYRISAsPER6I6JqjCJIqWaokqPAbBhwigvocCRNCQoK5NHCUSYaimwlOCCZg9FAipXAKoQSW19gRhH1PIm72LIpkydMoTSjVYRAXZ7wRiCKVjKLgJ53osZ8lmSg4ySECdtHSGjBNsolDoHiSSUAAIf6qqSBEYXZpZCBQYXNzaW5naGFtDQpodHRwOi8vYm9mZmluYnJhaW4uZGV2aWFudGFydC5jb20NCldpdGggcGVybWlzc2lvbiBmcm9tIGBueXNzaS4gIE9ubHkgdG8gYmUgdXNlZCBvbiBkZXZpYW50QVJULiAgRG8gbm90IGNvcHksIG1vZGlmeSBvciBkaXN0cmlidXRlIHdpdGhvdXQgcGVybWlzc2lvbi4AOw==" alt="Spanish">
                                        @endif
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
