{ pkgs ? import <nixpkgs> {} }:

let 
  lib = import <nixpkgs/lib>;

  NPM_CONFIG_PREFIX = toString ./npm_config_prefix;

in pkgs.mkShell {
  buildInputs = with pkgs; [
    php
    nodejs
    sqlite-web
    nodePackages.npm 
    php80Extensions.dom
    php80Packages.composer 
    php80Extensions.mbstring 
  ];

  inherit NPM_CONFIG_PREFIX;

  shellHook = ''
    export PATH="${NPM_CONFIG_PREFIX}/bin:$PATH"
    clear && echo "Ateliê Shell"
  '';

}
