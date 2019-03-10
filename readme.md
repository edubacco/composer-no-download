# Composer No Download Packages
This plugin prevents composer to download packages, but let him update composer.lock with correct infos.

This is useful in CI/CD pipelines, where you need to just update the composer.lock file, but you're not interested in
having PHP libraries be physically installed in your /vendor folder.

*Once installed, composer commands will have no effect on your vendor forlder and his content*
