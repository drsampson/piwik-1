
vcsrepo { "/var/www/piwik":
  ensure => present,
  provider => svn,
  source => 'http://dev.piwik.org/svn/trunk'
}

file { "/var/www/piwik/config":
  ensure => directory,
  mode => '0766',
}