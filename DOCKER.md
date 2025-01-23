# docker

Before start on Windows (replace CRLF to LF):

```bash
git config core.autocrlf false
git rm --cached -r .
git reset --hard
```

Entering docker:

```bash
docker compose up -d --build
docker compose exec ubuntu bash
```

Configuring:

```bash
./buildconf
./configure --enable-debug
```

Building:

```bash
make -j4
```

Running tests:

```bash
make TEST_PHP_ARGS=-j4 test
```

Installing PHP:

```bash
make install
```
