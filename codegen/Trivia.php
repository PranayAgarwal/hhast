<?hh
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<bebdbca761409e695b099e4426f054da>>
 */
namespace Facebook\HHAST;

final class WhiteSpace extends EditableTrivia {

  public function __construct(string $text) {
    parent::__construct('whitespace', $text);
  }

  public function withText(string $text): this {
    if ($text === $this->getText()) {
      return $this;
    }
    return new self($text);
  }
}

final class EndOfLine extends EditableTrivia {

  public function __construct(string $text) {
    parent::__construct('end_of_line', $text);
  }

  public function withText(string $text): this {
    if ($text === $this->getText()) {
      return $this;
    }
    return new self($text);
  }
}

final class DelimitedComment extends EditableTrivia {

  public function __construct(string $text) {
    parent::__construct('delimited_comment', $text);
  }

  public function withText(string $text): this {
    if ($text === $this->getText()) {
      return $this;
    }
    return new self($text);
  }
}

final class SingleLineComment extends EditableTrivia {

  public function __construct(string $text) {
    parent::__construct('single_line_comment', $text);
  }

  public function withText(string $text): this {
    if ($text === $this->getText()) {
      return $this;
    }
    return new self($text);
  }
}

final class Unsafe extends EditableTrivia {

  public function __construct(string $text) {
    parent::__construct('unsafe', $text);
  }

  public function withText(string $text): this {
    if ($text === $this->getText()) {
      return $this;
    }
    return new self($text);
  }
}

final class UnsafeExpression extends EditableTrivia {

  public function __construct(string $text) {
    parent::__construct('unsafe_expression', $text);
  }

  public function withText(string $text): this {
    if ($text === $this->getText()) {
      return $this;
    }
    return new self($text);
  }
}

final class FixMe extends EditableTrivia {

  public function __construct(string $text) {
    parent::__construct('fix_me', $text);
  }

  public function withText(string $text): this {
    if ($text === $this->getText()) {
      return $this;
    }
    return new self($text);
  }
}

final class IgnoreError extends EditableTrivia {

  public function __construct(string $text) {
    parent::__construct('ignore_error', $text);
  }

  public function withText(string $text): this {
    if ($text === $this->getText()) {
      return $this;
    }
    return new self($text);
  }
}

final class FallThrough extends EditableTrivia {

  public function __construct(string $text) {
    parent::__construct('fall_through', $text);
  }

  public function withText(string $text): this {
    if ($text === $this->getText()) {
      return $this;
    }
    return new self($text);
  }
}
