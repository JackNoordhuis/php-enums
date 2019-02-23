<?php

/**
 * EnumClass.php – enums
 *
 * Copyright (C) 2019 Jack Noordhuis
 *
 * @author Jack Noordhuis
 *
 * This is free and unencumbered software released into the public domain.
 *
 * Anyone is free to copy, modify, publish, use, compile, sell, or
 * distribute this software, either in source code form or as a compiled
 * binary, for any purpose, commercial or non-commercial, and by any means.
 *
 * In jurisdictions that recognize copyright laws, the author or authors
 * of this software dedicate any and all copyright interest in the
 * software to the public domain. We make this dedication for the benefit
 * of the public at large and to the detriment of our heirs and
 * successors. We intend this dedication to be an overt act of
 * relinquishment in perpetuity of all present and future rights to this
 * software under copyright law.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
 * IN NO EVENT SHALL THE AUTHORS BE LIABLE FOR ANY CLAIM, DAMAGES OR
 * OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE,
 * ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
 * OTHER DEALINGS IN THE SOFTWARE.
 *
 * For more information, please refer to <http://unlicense.org/>
 *
 */

declare(strict_types=1);

namespace nxtlvlsoftware\generator\enums\generator\models;

class EnumClass {

	/** @var string */
	private $namespace;

	/** @var string */
	private $class;

	/** @var \nxtlvlsoftware\generator\enums\generator\models\EnumClass[] */
	private $enums;

	/**
	 * @param string $namespace
	 * @param string $class
	 * @param array  $enums
	 */
	public function __construct(string $namespace, string $class, array $enums = []) {
		$this->namespace = $namespace;
		$this->class = $class;
		$this->enums = $enums;
	}

	/**
	 * @return string
	 */
	public function namespace() : string {
		return $this->namespace;
	}

	/**
	 * @return string
	 */
	public function class() : string {
		return $this->class;
	}

	/**
	 * @return \nxtlvlsoftware\generator\enums\generator\models\EnumDeclaration[]
	 */
	public function enums() : array {
		return $this->enums;
	}

	/**
	 * @param \nxtlvlsoftware\generator\enums\generator\models\EnumDeclaration $enum
	 */
	public function add(EnumDeclaration $enum) : void {
		$this->enums[] = $enum;
	}

}