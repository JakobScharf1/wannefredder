import { ComponentFixture, TestBed } from '@angular/core/testing';

import { IndexMinimalPortfolio } from './index-minimal-portfolio';

describe('IndexMinimalPortfolio', () => {
  let component: IndexMinimalPortfolio;
  let fixture: ComponentFixture<IndexMinimalPortfolio>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [IndexMinimalPortfolio]
    })
    .compileComponents();

    fixture = TestBed.createComponent(IndexMinimalPortfolio);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
